<?php ob_start();
if(!isset($_SESSION))
 session_start();
error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>VM LOGIN </title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">
	
      <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
	<?php
        $msg = '';
			if($_REQUEST["cid"])
			{
				switch($_REQUEST["cid"])
				{
					
					case "3225":
					{ $msg = "<div class='btn btn-danger col-md-4 form-control' style='margin-bottom: 5px; text-align: center;'>Wrong Username</div>";
					break; 
					}
					case "3226":
					{ $msg = "<div class='btn btn-danger col-md-4 form-control' style='margin-bottom: 5px; text-align: center;'>Wrong Password</div>";
					break; 
					}
					case "1212":
					{ $msg = "<div class='btn btn-danger col-md-4 form-control' style='margin-bottom: 5px; text-align: center;'>You are now Logged out!</div>";
					break; 
					}
					
				}
			}
			echo $msg;
		?>	  
		<br>
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">Login</button>
           
        </div>
      </form>

    </div>

<?php
require_once('../app/Baseclass.php');

if(isset($_POST['login']))
{ 
	$name = strtolower($_POST['username']);
	$pass = strtolower($_POST['password']);
	
	include("../temp/database.php");
	$query = "SELECT * FROM `staffs` WHERE username = '$name'";

	$result = $db_conn->query($query) or die ("error in validation");
		
	while($row = $result->fetch(PDO::FETCH_ASSOC))
		{
			if($row['username'] == $name)
			{ 
					if($row['password'] != $pass)
					{header("location:login.php?cid=3226"); exit;}
					
					else
					{	
						$query = "UPDATE staffs SET loginstatus='online' WHERE username = '$name'";
						$do = $db_conn->query($query);
						$_SESSION["username"] = $name;
						header("location:index.php");
						exit;
						
					}
			}
		}
		header("location:login.php?cid=3225"); 
}

if(isset($_REQUEST["cid"]) && $_REQUEST["cid"] == 1212)
{
	$name=$_SESSION["username"];
	include("../temp/database.php");
	$query = "UPDATE staffs SET loginstatus='offline' WHERE username = '$name'";
	$do = $db_conn->query($query);
	session_destroy();
	header("location: login.php");
}

?>
  </body>
</html>
