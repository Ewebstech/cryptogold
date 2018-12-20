<!DOCTYPE html>
<html xmlns="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders</title>
    <!-- Bootstrap Styles-->
    <?php include("header.php"); ?>
        <!--/. NAV TOP  -->
      <?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
      <?php
       
        $query = mysql_query("select * from `checkout` where username='$_SESSION[username]'");
        //$data = mysql_fetch_assoc($query);
		

      ?>
		<div id="page-wrapper">
		  <div class="header">

						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="index.php">My Orders</a></li>

					</ol>

		</div>
             <div id="page-inner">
              <!-- Begin Content -->
				<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             My Orders (Only orders for this month are displayed)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>S/N</th>
                                            <th>Item/Product</th>
                                            <th>Qty</th>
                                            <th>Amount</th>
                                            <th>Time of Order</th>
                                            <th>Order Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $k = 1;
									while($result = mysql_fetch_assoc($query)){
										$month = date("F"); $databasemonth = date("F",$result['time']);
										if($month == $databasemonth){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $k; ?></td>
											<td><span style='float: left'><img src='<?php echo $result["imageurl"]; ?>' width='50' height='50' /></span><span style='float: right'><?php echo $result["item"]; ?></span></td>
											<td><?php echo $result['qty']; ?></td>
											<td><?php echo $result['subtotal']; ?></td>
                                            <td><?php echo date(' F d, Y', $result['time']); ?></td>
                                            <td><?php echo $result["status"]; ?></td>
                                           
                                        </tr>
									<?php $k++; } } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              <!-- End Content -->

            </div>


	<?php include("footer.php"); 
	?>
