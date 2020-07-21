@extends('layouts.layout');

@section('content')
		<div class="container box">
			<br>
			<h3 align="center">Admin Login</h3>
			<h5 align="center">{{ session('msg')}}</h5>

			<form method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Username</label>
			 <input type="text" name="username" class="form-control" dusk="id" required />
			</div>
			<div class="form-group">
			 <label>Password</label>
			 <input type="password" name="password" class="form-control" dusk="password" required />
			</div>
			<div>
			 <input type="submit" name="login" class="btn btn-primary" value="Login" />
			</div>
			<h5>{{ session('error')}}</h5>
		   </form>
		</div>
@endsection