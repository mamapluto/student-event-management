<!DOCTYPE HTML>
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
	<body>
	<br />
		<div class="container">
			<h3 align="center">Student Event Management System</h3><br />
		</div>

		<div class="container box">
		
			<h3 align="center">Create an event</h3><br />

			<form method="post" action="">
			{{ csrf_field() }}
			<div class="form-group">
			 <label>Enter Event Name</label>
			 <input type="Ename" name="Ename" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Enter Event Description</label>
			 <input type="Edesc" name="Edesc" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Enter Event Date</label>
			 <input type="Edate" name="Edate" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Enter Number of Guest of Event</label>
			 <input type="Eguest" name="Eguest" class="form-control" />
			</div>
			<div class="form-group">
			 <label>Enter Participation Fee</label>
			 <input type="Efee" name="Efee" class="form-control" />
			</div>
			<div class="form-group">
			 <input type="submit" name="create" class="btn btn-primary" value="Create Event" />
			</div>
		   </form>
		</div>
	</body>
</html>
