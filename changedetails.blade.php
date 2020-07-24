@extends('layouts.userlayout')

@section('user')
		<div class="container box" style="background-color:ghostwhite">
            <br>
	   		<h3 align="center">User Settings</h3>
			<br>
			<form name="login-form" method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Student Name</label>
			 <input type="text" name="name" class="form-control" required value="{{ $student->student_name }}" />
			</div>
			<div class="form-group">
			 <label>Student ID</label>
			 <input type="text" name="id" class="form-control" required value={{ $student->student_no }} />
			</div>
			<div class="form-group">
			 <label>Password</label>
			 <input type="password" name="password" class="form-control" required />
			</div>
			<div class="form-group">
             <input type="hidden" name="student_id" value={{ $student->id }} />
			 <input type="submit" name="register" class="btn btn-primary" value="Update" />
			</div>
			<div style="margin-top:-40px;text-align:right">
		   	 <a class="link" href="/changepassword">Change Password</a>
			</div>
			<h5>{{ session('error')}}</h5>
		   </form>
        </div>
@endsection