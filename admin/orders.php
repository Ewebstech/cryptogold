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

    <title>Pending Orders</title>

	<?php include("header.html"); ?>

    <?php include("sidebar.php"); ?>
	
	<?php 
	if(isset($_REQUEST["recommend"]))
	{
		$update = mysql_query("update `invoice` set status='confirmed' where id='$_REQUEST[recommend]'");
	}
	
	if(isset($_REQUEST["deleteitem"]))
	{
		$delete = mysql_query("delete from `invoice` where id='$_REQUEST[deleteitem]'");
	}
	
	
	?>
      <!--main content start-->
      <section id="main-content">
	  <?php $viewcopier = mysql_query("select * from invoice where status='unconfirmed' order by time asc"); ?>


          <section class="wrapper" >
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Pending Orders</h3>
						<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Pending Orders</li>
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
          
              <div class="row"  style="background: #fff;">
                  
				
				  <?php if(isset($_REQUEST["viewproduct"])) { 
					$get = mysql_query("select * from invoice where id='$_REQUEST[viewproduct]'"); 
					$success = mysql_fetch_assoc($get);
				  ?>
						
				         <section class="panel">
						
                          <div class="panel-body">
						  <center>
                            <table class="table" style="width: 400px;">
                            <tbody>
                              <tr>
							  <td style="font-weight: bold;">Shipping Address:</td>
							  <td><?php echo ucwords(strtolower($success['address'])); ?>
							  	<br><?php echo ucwords(strtolower($success['suite'])); ?>

							  </td>
								
                              </tr>
                              <tr>
							  <td style="font-weight: bold;">State:</td>
                              <td><?php echo ucwords(strtolower($success["state"])); ?></td> 
							  </tr>
							  <tr>
							  <td style="font-weight: bold;">Items:</td>
                              <td><?php echo "<table>";
                              		$m = mysql_query("select * from checkout where id='$success[checkoutid]'");
                              		while($item = mysql_fetch_assoc($m)){
                              			echo"<tr><td><img src='../$item[imageurl]' width='50' height='50' /></td><td>$item[item]</td><td>Qty <b>x</b> $item[qty]</tr>";
                              		}
                              		echo"</table>";
                               ?></td> 
							  </tr>
							  <tr>
							  <td style="font-weight: bold;">Order Notes:</td>
                              <td><?php echo ucwords(strtolower($success["ordernotes"])); ?></td> 
							  </tr>
							  
                       		  <tr>
							  <td style="font-weight: bold;">Time Ordered:</td>
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
							<th>Name</th>
							 <th>Phone Number</th>
							 <th>Order Total (N)</th>
							  <th>Payment Method</th>
							  <th>Status</th>
                             <th><i class="icon_cogs"></i> Action</th>
                              </tr>
							 <?php $i = 1; 
							  while($view = mysql_fetch_assoc($viewcopier)) { ?>
                              <tr>
							    <td><?php echo $i; ?></td>
								 <td><?php echo ucwords(strtolower($view["name"])); ?></td>
                                 
								<td><?php echo ucwords(strtolower($view["mobile"])); ?></td>
								<td><b>N<?php echo ucwords(strtolower($view["total"])); ?></b></td>
								<td><span class="label label-primary"><?php echo ucwords(strtolower($view["payment_method"])); ?></span></td>
								<td><b><span class="label label-info"><?php echo ucwords(strtolower($view["status"])); ?></span></b></td>
								
                                <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="orders.php?viewproduct=<?php echo"$view[id]"; ?>" data-toggle='tooltip' title='View Details'> View Details <i class="icon_plus_alt2"></i></a><br /><br>
                                      <a class="btn btn-success" href="orders.php?recommend=<?php echo"$view[id]"; ?>" data-toggle='tooltip' title='Confirm Order'> Confirm Order <i class="icon_check_alt2"></i></a><br /><br>
                                      <a class="btn btn-danger" href="orders.php?deleteitem=<?php echo"$view[id]"; ?>" data-toggle='tooltip' title='Delete Item'> Cancel Order <i class="icon_close_alt2"></i></a>
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
