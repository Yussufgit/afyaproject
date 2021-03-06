<?php
        session_start();
        if(!isset($_SESSION['h_id']))
        {
            header("Location: index.php");
        }
 ?>
 <?php include("includes/connection.php"); ?>
<!DOCTYPE html>
<head>
<title>Health-Care</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Web Template" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<link rel="stylesheet" href="css/style2.css">
    <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
    $('.timepicker').wickedpicker({twentyFour: false});
</script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php" class="logo">HealthCare</a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <?php 
            $h_id = $_SESSION['h_id'];
            $query = "SELECT * FROM hospital WHERE h_id='{$h_id}'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            echo mysqli_error($conn);
        ?>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="name"><?php echo $row['hname']?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="../signout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Appointments</span>
                    </a>
                    <ul class="sub">
						<li><a href="appointments.php?type=0">Previous Appointments</a></li>
                        <li><a href="appointments.php?type=1">Customer Data</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Doctors</span>
                    </a>
                    <ul class="sub">
                        <li><a href="doctors.php?type=0">Pending Doctor Approvals</a></li>
                        <li><a href="doctors.php?type=1">All Doctors</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blood.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Blood Drive</span>
                    </a>
                </li>
                <li>
                    <a href="events.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Profile</span>
                    </a>
                </li> 
                <li>
                    <a href="../signout.php">
                        <i class="fa fa-user"></i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>