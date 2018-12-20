<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Register Staffs</title>

	<?php include("header.html"); ?>

    <?php include("sidebar.php"); ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Staff Administration</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Remove Staffs</li>
						
					</ol>
				</div>
			</div>
              <!-- data -->              
          


<div class="row">
   <div class="col-md-5">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-group">
 	<div class="form-group">
    <label>Remove Staff</label>
    <select name="del" class="form-control">
 <option value=''>Choose Staff to be removed</option>
  <?php 
  $result = mysql_query("select * from staffs");
  while($staff = mysql_fetch_array($result)) { 
  echo"
  <option value='$staff[id]'>$staff[1] (Email Address: $staff[email])</option>
  ";
  }
  ?>
  </select>
	</div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary" name="remove" value="Remove" />
	</div>
  </form>
  </div>
  </div>
 <?php 
  if(isset($_POST['remove']) and $_POST['del']!=""){
	  $result = mysql_query("select * from staffs where id='$_POST[del]'");
	  $staffname = mysql_fetch_assoc($result);
	  $_SESSION['delete'] = $_POST['del'];
	  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
	  <input type='hidden' name='confirm' value='ok' />
	  <div>Are you sure you want to remove <b>$staffname[name]</b> as a registered user?</div> <br />
	  <input type='submit' name='c' class='btn btn-success' value='Yes I am Sure' />
	   <a href='removestaff.php' class='btn btn-danger'>No Please Cancel</a>
	  </form>
	  ";
	  
  
  }
  if($_POST['confirm']=="ok"){
	  $removeitem = $_SESSION['delete'];
	  
	  $result = mysql_query("select * from staffs where id='$removeitem'");
	  $staffname = mysql_fetch_assoc($result);
	  $_SESSION["staffname"] = $staffname["name"];
	  
	  $query = "DELETE from `staffs` WHERE `id`='$removeitem'";
	  $result = mysql_query($query);
	  
	  if($result)
	  {
		echo"<span class='btn btn-info'><b>$_SESSION[staffname] has been Removed successfully</b>";  
	  }
}
  ?>


			  </div> <!---/panel -->
		  </div>
	  </section>
  </div>
</div>
<!-- page end-->
</section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
