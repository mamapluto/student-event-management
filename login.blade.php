<!--<!DOCTYPE HTML>
<html>
	<head>
	<title> Login Page </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/Layouts/app.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	   .box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	   }
	</style>
	</head>
	<body>
-->
@extends('layouts.layout');

@section('content')
		<div class="container box">
			<br>
			<h3 align="center">Login</h3>
			<h5 align="center">{{ session('msg')}}</h5>

			<form name="login-form" method="post" action="login">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Student ID</label>
			 <input type="text" name="id" class="form-control" dusk="id" required />
			</div>
			<div class="form-group">
			 <label>Password</label>
			 <input type="password" name="password" class="form-control" dusk="password" required />
			</div>
			<div>
			 <input type="submit" name="login" class="btn btn-primary" value="Login" />
			</div>
			<div style="margin-top:-25px;text-align:right">
		   	 <a class="link" href="/register">Register</a>
			</div>
			<h5>{{ session('error')}}</h5>
		   </form>
		</div>
@endsection
	<!--</body>
</html>-->
