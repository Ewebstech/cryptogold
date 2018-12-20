<?php
ob_start();
if(!isset($_SESSION)) session_start();
//error_reporting(0);
require_once "../temp/database.php";
date_default_timezone_set('Africa/lagos');
if(isset($_SESSION["username"]))
{
	$username = $_SESSION["username"];
	$query = "SELECT * FROM `members` WHERE email = '$username'";
	$result = $db_conn->query($query);
	if(!$result){echo "error in validation";}
	$row = $result->fetch(PDO::FETCH_ASSOC);
}
else{
	header("location: ../auth/conduit.php?cid=1212");
	}


?>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
    <link rel="shortcut icon" type="image/png" href="../img/favi.png" />
    <link rel="shortcut icon" type="image/png" href="../img/favi.png" />
</head>




<body>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong>My Control Panel</strong></a>

		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <b><?php echo $row["name"];  ?></b> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li><a href="../app/process.php?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
