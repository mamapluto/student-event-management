<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Event;
use App\Participant;

class EventController extends Controller
{
    //Homepage
    public function home(Request $request) {
        $eventlist = Event::all();
        $participantlist = Participant::all();
        if ($student_id = $request->session()->get('user_id')) {
            $participantlist = Participant::where('student_id', '=', $student_id)->get();
        }

        return view('home', [
            'eventlist' => $eventlist,
            'participantlist' => $participantlist,
        ]);
    }
    //Join event
    public function joinEvent(Request $request) {
        if ($student_id = $request->session()->get('user_id')) {
            if (request('joined')) {
                //delete participation record if joined an event
                $record = Participant::find(request('participant_id'));
                $record->delete();
            } else {
                //add participation record if not yet joined an event
                $participant = new Participant();

                $participant->student_id = $student_id;
                $participant->event_id = request('event_id');

                error_log($participant);

                $participant->save();
            }

            return redirect('/');
        } else {
            //redirect to login page if not logged in
            return view('login');
        }
        
    }

    public function showCreateEvent(Request $request) {
        if ($request->session()->get('user_id')) {
            return view('createevent');
        } else {
            //redirect to login page if not logged in
            return view('login');
        }
    }
    public function createEvent(Request $request) {
        $event = new Event();

        $event->event_name = request('name');
        $event->event_desc = request('desc');
        $event->event_type = request('type');
        $event->event_location = request('location');
        $event->event_date = request('date');
        $event->event_startTime = request('start_time');
        $event->event_endTime = request('end_time');
        $event->event_participantNo = request('participant_no');
        $event->event_fee = request('fee');
        $event->event_organizer = $request->session()->get('user_id');
        $event->event_status = 0;

        error_log($event);

        $event->save();

        return redirect('/');
    }

    public function viewEvent($id) {
        return view('event', ['id' => $id]);
    }

    public function showLogin() {
        return view('login');
    }
    public function login(Request $request) {
        if ($student = Student::where('student_no', request('id'))->first()) {
            if ($student->student_password == request('password')) {
                $request->session()->put('user_id', $student->student_id);
                $request->session()->put('user_name', $student->student_name);
                
                return redirect('/');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }
    public function logout(Request $request) {
        $request->session()->forget('user_id');

        return redirect('/');
    }

    public function showRegister() {
        return view('register');
    }
    public function registerStudent() {
        if (request('password') == request('conpassword')) {
            $student = new Student();
            $student->student_name = request('name');
            $student->student_no = request('id');
            $student->student_password = request('password');
            $student->student_admin = 0;

            error_log($student);

            $student->save();

            return redirect('/login')->with('msg', 'Registration success');
        } else {
            return redirect()->back();
        }
    }
}
