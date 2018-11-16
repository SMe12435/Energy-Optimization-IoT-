<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['login'])) {
header('Location: index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Energy Optimization by Internet of Things</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Energy Optimization
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>AUDI 1</p>
                    </a>
                </li>
                <li>
                    <a href="firstfloor.php">
                        <i class="pe-7s-graph"></i>
                        <p>AUDI 2</p>
                    </a>
                </li>
                <li>
                    <a href="secondfloor.php">
                        <i class="pe-7s-graph"></i>
                        <p>AUDI 3</p>
                    </a>
                </li>
              
                <li>
                    <a href="thirdfloor.html">
                        <i class="pe-7s-graph"></i>
                        <p>AUDI 4</p>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="logout.php">
                        <i class="pe-7s-user"></i>
                        <p>Log out</p>
                    </a>
                </li>
             
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
              
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                          <!--  <div class="header">
                                <h4 class="title">Ground Floor overview</h4>
                                <p class="category">Updated seconds ago</p>
                            </div>
                            <div class="content"> -->
                               <!--  <iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/9/charts/2?days=5&dynamic=true&median=60&round=2&type=line"></iframe> -->
                             <!--  <iframe width="550" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/508927/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe> -->

                            </div>
                        </div>
                    </div>
                </div>
        
<!--second row added ---------------------->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Energy conservation without model</h4>
                                <p class="category">Updated seconds ago</p>
                            </div>
                            <div class="content">
                             <!--   <iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/9/charts/2?days=5&dynamic=true&median=60&round=2&type=line"></iframe> -->
                               <iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/508927/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">energy conservation with model</h4>
                                <p class="category">Updated seconds ago</p>
                            </div>
                            <div class="content">
                             <!--    <iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/9/charts/2?days=5&dynamic=true&median=60&round=2&type=line"></iframe> -->
                              <iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/508927/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                               
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-graph',
            	message: "Welcome to overview of 1AB you can surf room/floor wise energy optimization."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>