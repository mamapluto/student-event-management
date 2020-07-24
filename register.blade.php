
<!--<!DOCTYPE HTML>
<html>
	<head>
	<title> Register Page </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/css/app.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	   .box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	   }
	</style>
	<body>-->
@extends('layouts.layout');

@section('content')
		<div class="container box">
			<br>
			<h3 align="center">Register</h3>

			<form method="post" action="register">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Student Name</label>
			 <input type="text" name="name" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Student ID</label>
			 <input type="text" name="id" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Password</label>
			 <input type="password" name="password" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Confirm Password</label>
			 <input type="password" name="conpassword" class="form-control" required />
			</div>
			<div class="form-group">
			 <input type="submit" name="register" class="btn btn-primary" value="Register" />
			</div>
		   </form>
		</div>
@endsection
	<!--</body>
</html>-->


<!--<!DOCTYPE HTML>

<!DOCTYPE HTML>

<html>
	<head>
	<title> Register Page </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<link rel="stylesheet" href="/css/app.css" />

	<link rel="stylesheet" href="/css/app.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	   .box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	   }
	</style>

	<body>-->
@extends('layouts.layout');

@section('content')
		<div class="container box" style="background-color:ghostwhite">
			<br>
			<h3 align="center">Register</h3>

			<form method="post" action="register">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Student Name</label>
			 <input type="text" name="name" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Student ID</label>
			 <input type="text" name="id" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Password</label>
			 <input type="password" name="password" class="form-control" required />
			</div>
			<div class="form-group">
			 <label>Confirm Password</label>
			 <input type="password" name="conpassword" class="form-control" required />

	<body>
	<br />
		<div class="container">
			<h3 align="center">Student Event Management System</h3><br />
		</div>

		<div class="container box">
		
			<h3 align="center">Register</h3><br />

			<form method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Enter Student ID</label>
			 <input type="id" name="id" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Enter Password</label>
			 <input type="password" name="password" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Confirm Password</label>
			 <input type="conpassword" name="conpassword" class="form-control" />

			</div>
			<div class="form-group">
			 <input type="submit" name="register" class="btn btn-primary" value="Register" />
			</div>

			<h5>{{ session('error')}}</h5>
		   </form>
		</div>
@endsection
	<!--</body>
</html>-->

		   </form>
		</div>
	</body>
</html>


