<!-- Admin panel layout -->
@extends('layouts.layout')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top" >

      <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="#">Admin Panel</a>
	  
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle p-0"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="material-icons icon">
                person
              </i>
              <span class="text" style="color:black">Account</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="wrapper d-flex">

      <div class="sideMenu">
        <div class="sidebar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/admin" class="nav-link px-2">
                <i class="material-icons icon"> insert_chart </i>
                <span class="text">Event list</span>

      <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/admin_eventstatus" class="nav-link px-2">
                <i class="material-icons icon"> insert_chart </i>
                <span class="text">Event status</span>

              </a>
            </li>
            <li class="nav-item">
              <a href="/admin_createevent" class="nav-link px-2">
                <i class="material-icons icon"> dashboard </i>

                <span class="text">Create event</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin_community" class="nav-link px-2">
                <i class="material-icons icon"> insert_chart </i>
                <span class="text">Community list</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin_createcommunity" class="nav-link px-2">
                <i class="material-icons icon"> dashboard </i>
                <span class="text">Create community</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin_users" class="nav-link px-2">
                <i class="material-icons icon"> person </i>
                <span class="text">Users</span>

                <span class="text">Event Create</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2">
                <i class="material-icons icon"> person </i>
                <span class="text">User Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 sideMenuToggler">
                <i class="material-icons icon expandView "> view_list </i>
                <span class="text">Resize</span>

              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content" style="margin:auto">
        <main>
          @yield('admin')
        </main>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
      integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
      integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI="
      crossorigin="anonymous"
    ></script>
    <script src="./js/script.js"></script>
@endsection