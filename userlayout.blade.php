<!-- User layout -->
@extends('layouts.layout')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">Home</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			@if (Session::has('user_id'))
			<li class="nav-item active">
			<a class="nav-link" href="/createevent"> Create Event </a>
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="/community"> Communities </a>
			</li>
			<li class="nav-item active">
			<a class="nav-link" href="/changedetails"> User Settings </a>
			</li>
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
	@yield('user')
@endsection