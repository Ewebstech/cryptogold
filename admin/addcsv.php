
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Add Products/Items</title>
    <style>
	 body{
		 color: #000 !important;
	 }
	 label{
		 font-weight: bold !important;
	 }
	 </style>
	<?php include("header.php"); ?>
    
    <?php include("sidebar.php"); ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Upload VIA Csv</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Csv</li>
						
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-md-5">
                        <form enctype="multipart/form-data" method="post" action="process.php">
                            <table class="table">
                                <tr >
                                    <td colspan="2" align="center"><strong>Import CSV file</strong></td>
                                </tr>
                                <tr>
                                    <td align="center">CSV File:</td><td>
                                        <input class="form-control" type="file" name="file" id="file"></td>
                                </tr>
                                <tr >
                                    <td colspan="2" align="center"><input type="submit" name="importcsv" value="submit"></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>

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