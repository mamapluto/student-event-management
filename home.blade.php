@extends('layout.app')

<!DOCTYPE HTML>
<html>
	<head>
	<title> Student Event Management System </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/css/app.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	   .box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	   }
	</style>
	<body>
	<br />
		<div class="container">
			<h3 align="center">Student Event Management System</h3><br />
		</div>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="/login"> Login </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/register"> Register</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/createevent"> Create an Event</a>
			  </li>
			</ul>
		  </div>
		</nav>
		<div class="container">
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th><strong> Event Name </strong></th>
						<th><strong> Event Date </strong></th>
						<th><strong> Event Description </strong></th>
						<th><strong> Event Status </strong></th>
						<th><strong>  </strong></th>
					</tr>
					<tr>
						<td> Enter event name here</td>
						<td> Enter event date here </td>
						<td> Enter event description here </td>
						<td> Enter event status here </td>
						<td> 
						<form method="post" action="">
							<input type="submit" name="Join" class="btn btn-primary" value="Join" /> 
						</form>
						</td>
					</tr>
					<tr>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
						<td>  </td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
