<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
	<link href="datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <title>View all Products</title>

	<?php include("header.html"); ?>

    <?php include("sidebar.php"); ?>
	
	<?php 
	if(isset($_REQUEST["recommend"]))
	{
		$update = mysql_query("update items set status='confirmed' where itemtitle='$_REQUEST[recommend]'");
		if($update) { header("location: pendingproducts.php"); }
	}
	
	if(isset($_REQUEST["deleteitem"]))
	{
		function delete_files($dir){
		  if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
			  if ($object != "." && $object != "..") {
				if (filetype($dir."/".$object) == "dir") 
				   delete_files($dir."/".$object); 
				else unlink   ($dir."/".$object);
			  }
			}
			reset($objects);
			rmdir($dir);
		  }
		 }
		 delete_files("../itemimages/$_REQUEST[deleteitem]");
		$delete = mysql_query("delete from items where itemtitle='$_REQUEST[deleteitem]'");
		if($delete) { 
		header("location: pendingproducts.php"); 
		}
	}
	
	
	?>
      <!--main content start-->
      <section id="main-content">
	  <?php $viewcopier = mysql_query("select * from items group by itemtitle order by time asc"); ?>
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> View All Products</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>View Products</li>
						<?php if(!isset($_REQUEST["viewproduct"])) { ?>
						<li>
							<span class="label label-success">
								<b><?php echo $r = mysql_num_rows($viewcopier); ?></b> Products are Currently Active Here
							</span>
						</li>
						<?php } ?>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
          
              <div class="row">
                  
				
				  <?php if(isset($_REQUEST["viewproduct"])) { 
					$get = mysql_query("select * from items where itemtitle='$_REQUEST[viewproduct]'"); 
					$success = mysql_fetch_assoc($get);
				  ?>
						<section>
							<div class="panel" style="text-align: center;">
							 
								<div class="panel-body">
									<?php echo"<img src='../$success[imageurl]' style='text-align: center; margin: auto;' />"; ?>
								</div>
							</div>
						</section>
				         <section class="panel">
						
                          <div class="panel-body">
						  <center>
                            <table class="table" style="width: 400px;">
                            <tbody>
                              <tr>
							  <td style="font-weight: bold;">Product Name:</td>
							  <td><?php echo ucwords(strtolower($success['itemtitle'])); ?></td>
			
                              </tr>
                              <tr>
							  <td style="font-weight: bold;">Status:</td>
                              <td><?php echo ucwords(strtolower($success["status"])); ?> Approval</td> 
							  </tr>
							  <tr>
							  <td style="font-weight: bold;">Review Star:</td>
                              <td><?php echo ucwords(strtolower($success["reviewstar"])); ?></td> 
							  </tr>
							  <tr>
							  <td style="font-weight: bold;">Description:</td>
                              <td><?php echo ucwords(strtolower($success["description"])); ?></td> 
							  </tr>
							  <tr>
							  <td style="font-weight: bold;">Shipping:</td>
                              <td><?php echo ucwords(strtolower($success["shipping"])); ?></td> 
							  </tr>
							  <tr>
							  <td style="font-weight: bold;">Sale End:</td>
                              <td><?php echo $time = date('jS \of F, Y', $success["saletime"]); ?></td> 
							  </tr>
                       		  <tr>
							  <td style="font-weight: bold;">Time Uploaded:</td>
							  <td><?php echo $time = date('jS \of F, Y h:i:A', $success["time"]); ?></td> 
							  </tr>
                              </tbody>
                          </table>
						  </center>
                                                      
                          </div>
					
                      </section>
				  <?php } if(!isset($_REQUEST["viewproduct"])) { ?>
				<div class="col-md-12">	  
				 <table id="example1" class="table table-striped table-advance table-bordered table-hover">
                           <tbody>
                              <tr>
							  <th>S/N</th>
								<th>Product's Title</th>
                                <th>Standard Price</th>
								 <th>Discount Price</th>
								 <th>Quantity Stated</th>
								  <th>Time</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							 <?php $i = 1; while($view = mysql_fetch_assoc($viewcopier)) { ?>
                              <tr>
							    <td><?php echo $i; ?></td>
								 <td><?php echo ucwords(strtolower($view["itemtitle"])); ?></td>
                                 <td><b>N <?php echo ucwords(strtolower($view["standardprice"])); ?></b></td>
								<td><b>N <?php echo ucwords(strtolower($view["discountprice"])); ?></b></td>
								<td><?php echo ucwords(strtolower($view["quantity"])); ?></td>
								<td><?php echo $time = date('jS \of F, Y h:i:A', $view["time"]); ?></td>
                                <td>
                                  <div class="btn-group" >
                                      <a class="btn btn-primary" href="viewitems.php?viewproduct=<?php echo"$view[itemtitle]"; ?>" data-toggle='tooltip' title='View Product'> View Details <i class="icon_plus_alt2"></i></a><br /><br>
                                      <a class="btn btn-success" href="viewitems.php?recommend=<?php echo"$view[itemtitle]"; ?>" data-toggle='tooltip' title='Publish'> Publish Product <i class="icon_check_alt2"></i></a><br /><br>
                                      <a class="btn btn-danger" href="viewitems.php?deleteitem=<?php echo"$view[itemtitle]"; ?>" data-toggle='tooltip' title='Delete Item'>Remove <i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
							 <?php } ?>
                                                    
                           </tbody>
                        </table>
                          
					</div>
				<?php } ?>
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
<script src="datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>	
 <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
