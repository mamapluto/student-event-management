@extends('layouts.userlayout')

@section('user')
		<div class="container box" style="background-color:ghostwhite">
            <br>
	   		<h3 align="center">Change Password</h3>
			<br>
			<form name="login-form" method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>New Password</label>
			 <input type="password" name="password" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Confirm Password</label>
			 <input type="password" name="conpassword" class="form-control" required />
			</div>
			<div class="form-group">
             <input type="hidden" name="student_id" value={{ $student->id }} />
			 <input type="submit" name="register" class="btn btn-primary" value="Change Password" />
			</div>
			<h5>{{ session('error')}}</h5>
		   </form>
        </div>
@endsection