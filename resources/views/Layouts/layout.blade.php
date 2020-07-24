<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Event Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Style -->
        <!--<link href="/css/main.css" rel="stylesheet">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link href="/css/app.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Icons -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
            rel="stylesheet"
            integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
            crossorigin="anonymous"
        />
        <style type="text/css">
            .box{
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
            }
            footer{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <br>
		<div class="container">
			<h3 align="center">Student Event Management System</h3><br />
		</div>
        <!-- Event status array -->
        @php
            $status = array(
                "Pending Approval",
                "Available",
                "Closed",
            )
        @endphp
        @yield('content')

        <footer>
            2020 INTI International College Penang
        </footer>
    </body>
</html>