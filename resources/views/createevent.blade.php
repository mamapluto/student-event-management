<!--<!DOCTYPE HTML>
<html>
	<head>
	<title> Create Event Page </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="/css/app.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	   .box{
		width:1200px;
		margin:0 auto;
		border:1px solid #ccc;
	   }
	</style>
	<body>-->
@extends('layouts.layout');

@section('content')
		<div class="container box">
		  <br>
		  <h3 align="center">Create an event</h3>

		  <form method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Event Name</label>
			 <input type="text" name="name" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Event Description</label>
			 <textarea name="desc" class="form-control"></textarea>
			</div>
			<div class="form-group">
			 <label>Event Type</label>
			 <input type="text" name="type" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Event Location</label>
			 <input type="text" name="location" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Event Date</label>
			 <input type="date" name="date" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Event Start Time</label>
			 <input type="time" name="start_time" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Event End Time</label>
			 <input type="time" name="end_time" class="form-control" />
			</div>
			<div class="form-group">
			 <label>No. of Participants for Event</label>
			 <input type="number" name="participant_no" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Participation Fee (RM)</label>
			 <input type="number" step="0.01" name="fee" class="form-control" />
			</div>
			<div class="form-group">
			 <input type="submit" name="create" class="btn btn-primary" value="Create Event" />
			</div>
		  </form>
		</div>
@endsection
	<!--</body>
</html>-->
