<!--<!DOCTYPE HTML>
<html>
	<head>
	<title> Student Event Management System </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" src="/Layouts/css/app.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	   .box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	   }
	</style>
	<body>-->
@extends('layouts.layout')

@section('content')
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Home</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			  @if (Session::has('user_id')) 
			  <li class="nav-item active">
				<a class="nav-link" href="/logout"> Logout </a>
			  </li>
			  @else
			  <li class="nav-item">
				<a class="nav-link" href="/login"> Login </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/register"> Register</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/adminlogin"> Admin Login </a>
			  </li>
			  @endif
			</ul>
		  </div>
		</nav>
		<br>
		<div class="container">
			<div class="row">
				<table class="table table-striped">
					<tr>
						<th><strong> Event Name </strong></th>
						<th><strong> Event Date </strong></th>
						<th><strong> Time </strong></th>
						<th><strong> Location </strong></th>
						<th><strong> Event Type </strong></th>
						<th><strong> Event Description </strong></th>
						<th style="text-align:right"><strong> Participation Fee (RM) </strong></th>
						<th style="text-align:right"><strong> Participants remaining </strong></th>
						<th><strong> Status </strong></th>
						<th><strong>  </strong></th>
					</tr>
					@foreach ($eventlist as $event)
						<tr>
							<td>{{ $event->event_name }}</td>
							<td>{{ date_format(date_create($event->event_date), "D j"."S F Y") }}</td>
							<td>{{ $event->event_startTime."-".$event->event_endTime }}</td>
							<td>{{ $event->event_location }}</td>
							<td>{{ $event->event_type }}</td>
							<td>{{ $event->event_desc }}</td>
							<td style="text-align:right">
							@if ($event->event_fee == 0)
							  Free
							@else
							  {{ number_format($event->event_fee,2) }}
							@endif
							</td>
							<td style="text-align:right">{{ $participantRemain[$event->id] }}</td>
							<td>
							@php
							  $text = "Join";
							  $joined = 0;
							  $participant_id = 0;
							  $disabled = "";
							@endphp
							@switch($event->event_status)
							  @case (0) 
							    Pending Approval
								@php
								  $disabled = "disabled";
								@endphp
							  @break
							  @case (1) 
							    Available
								@if (Session::has('user_id'))
								  @foreach ($participantlist as $participant)
									@if ($event->id == $participant->event_id)
									  @php
									  $text = "Unjoin";
									  $joined = 1;
									  $participant_id = $participant->id;
									  @endphp
									  @break
									@endif
								  @endforeach
								@endif
							  @break
							  @case (2) 
							    Closed
								@php
								  $disabled = "disabled";
								@endphp
							  @break
							@endswitch
							</td>
							<td> 
							<form method="post" action="/">
								@csrf
								<input type="hidden" name="event_id" value={{ $event->id }} >
								<input type="hidden" name="joined" value={{ $joined }}>
								<input type="hidden" name="participant_id" value={{ $participant_id }}>
								<input type="submit" class="btn btn-primary" value={{ $text }} {{ $disabled }} /> 
							</form>
							</td>
						</tr>
					@endforeach
				</table>
				<!--<div >
				<p>There are currently no events are posted. Please wait for the admins to update the system.</p>
				</div>-->
			</div>
		</div>
@endsection
	<!--</body>
</html>-->
