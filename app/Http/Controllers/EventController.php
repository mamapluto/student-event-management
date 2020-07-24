<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Event;
use App\Admin;
use App\Participant;

class EventController extends Controller
{
    /* User interface */
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
            'participantRemain' => $this->getRemainingParticipants($eventlist),
        ]);
    }
    //Get remaining participants for each event
    public function getRemainingParticipants($eventlist) {
        $participantRemain = array();

        foreach($eventlist as $event) {
            $remain = $event->event_participantNo - Participant::where('event_id','=',$event->id)->count();
            $participantRemain += [$event->id => $remain];
        }

        return $participantRemain;
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

    //Show user details
    public function showChangeDetails(Request $request) {
        if ($student_id = $request->session()->get('user_id')) {
            $student = Student::find($student_id);
            
            return view('changedetails', ['student' => $student,]);
        } else {
            return view('/');
        }
    }
    //Update user
    public function updateUser(Request $request) {
        if ($student = Student::find(request('student_id'))) {
            if ($student->student_password == request('password')) {
                $student->student_name = request('name');
                $student->student_no = request('id');

                $student->update();

                return redirect('changedetails');
            } else {
                return redirect()->back()->with('error', "Password must match with Confirm Password");
            }
        } else {
            return view('/');
        }
    }
    //Change password
    public function showChangePassword(Request $request) {
        if ($student_id = $request->session()->get('user_id')) {
            $student = Student::find($student_id);
            
            return view('changepassword', ['student' => $student,]);
        } else {
            return view('/');
        }
    }
    public function changePassword(Request $request) {
        if ($student = Student::find(request('student_id'))) {
            if (request('password') == request('conpassword')) {
                $student->student_password = request('password');

                $student->update();

                return redirect('changedetails');
            } else {
                return redirect()->back()->with('error', "Password must match with Confirm Password");
            }
        } else {
            return view('/');
        }
    }

    /* Admin panel */
    //Validate admin status (appears to be not working for some reason)
    public function adminValidate(Request $request) {
        if (!$request->session()->get('admin')) {
            return redirect('/');
        }
    }
    //Show events table for admin
    public function adminEventStatus(Request $request) {
        $this->adminValidate($request);
        $eventlist = Event::all();
        $participantlist = Participant::all();

        return view('admin_eventstatus', [
            'eventlist' => $eventlist,
            'participantlist' => $participantlist,
            'participantRemain' => $this->getRemainingParticipants($eventlist),
        ]);
    }
    //Delete event
    public function deleteEvent(Request $request) {
        if ($event = Event::find(request('event_id'))) {
            $event->delete();

            return redirect('/admin');
        }
    }

    //Admin create event page
    public function adminCreateEvent(Request $request) {
        return view('admin_createevent');
    }
    //Create event
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

        $event->save();

        return redirect('/admin');
    }
    //Update event page
    public function adminUpdateEvent(Request $request) {
        if ($event = Event::find(request('event_id'))) {
            return view('admin_updateevent', ['event' => $event]);
        } else {
            return redirect('/admin');
        }
    }
    //Update event
    public function updateEvent(Request $request) {
        if ($event = Event::find(request('event_id'))) {
            $event->event_name = request('name');
            $event->event_desc = request('desc');
            $event->event_type = request('type');
            $event->event_location = request('location');
            $event->event_date = request('date');
            $event->event_startTime = request('start_time');
            $event->event_endTime = request('end_time');
            $event->event_participantNo = request('participant_no');
            $event->event_fee = request('fee');
            $event->event_status = request('status');;

            $event->update();
        }

        return redirect('/admin');
    }

    //User list
    public function adminUsers() {
        $studentlist = Student::all();
        return view('/admin_users', [
            'studentlist' => $studentlist,
        ]);
    }
    //Delete user
    public function deleteUser(Request $request) {
        $student = Student::find(request('student_id'));
        //$participantlist = Participant::where('student_id', '=', request('student_id'))->get();

        $student->delete();
        //$participantlist->delete();

        return redirect('/admin_users');
    }

    //User login
    public function showLogin() {
        return view('login');
    }
    public function login(Request $request) {
        if ($student = Student::where('student_no', request('id'))->first()) {
            if ($student->student_password == request('password')) {
                $request->session()->put('user_id', $student->id);
                $request->session()->put('user_name', $student->student_name);
                $request->session()->put('admin', 0);
                
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
    //Admin login
    public function showAdminLogin() {
        return view('adminlogin');
    }
    public function adminLogin(Request $request) {
        if ($admin = Admin::where('admin_name', request('username'))->first()) {
            if ($admin->admin_password == request('password')) {
                $request->session()->put('user_id', $admin->id);
                $request->session()->put('user_name', $admin->admin_name);
                $request->session()->put('admin', 1);
                
                return redirect('/admin');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->back()->with('error', 'Admin not found');
        }
    }

    //Register
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
            return redirect()->back()->with('error', "Password must match with Confirm Password");
        }
    }
}
