<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Event;

class EventController extends Controller
{
    //
    public function home() {
        $eventlist = Event::all();

        return view('home', [
            'eventlist' => $eventlist,
        ]);
    }

    public function showCreateEvent() {
        $students = Student::all();

        $page = [
            'event' => 'create',
            'type' => 0
        ];
    
        return view('createevent', $page);
    }
    public function createEvent() {
        $event = new Event();

        $event->event_name = request('name');
        $event->event_desc = request('desc');
        $event->event_location = request('location');
        $event->event_date = request('date');
        $event->event_startTime = request('start_time');
        $event->event_endTime = request('end_time');
        $event->event_participantNo = request('participant_no');
        $event->event_fee = request('fee');
        $event->event_organizer = 0;
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
    public function login() {
        if ($student = Student::where('student_no', request('id'))->first()) {
            if ($student->student_password == request('password')) {
                Session::set('user_id', $student->student_id);
                Session::set('user_name', $student->student_name);
                return redirect('/');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    public function showRegister() {
        return view('register');
    }
    public function registerStudent() {
        //error_log(request('id'));
        //error_log(request('password'));
        //error_log(request('conpassword'));

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
