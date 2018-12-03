<!DOCTYPE html>
<html xmlns="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Uploads</title>
    <!-- Bootstrap Styles-->
    <?php include("header.php"); ?>
        <!--/. NAV TOP  -->
      <?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
      <?php
       
        $query = mysql_query("select * from `items` where userid='$_SESSION[username]' group by itemtitle order by time desc");
        

      ?>
		<div id="page-wrapper">
		  <div class="header">

						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="index.php">My Uploads</a></li>

					</ol>

		</div>
            <div id="page-inner">
              <!-- Begin Content -->
				<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             My Uploads (Only products uploaded within this month are displayed)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>S/N</th>
                                            <th>Product</th>
                                            <th>Upload Time</th>
                                            <th>Status</th>
                                            
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
											<td><?php echo $result["itemtitle"]; ?></td>
                                            <td><?php echo date('jS \of F, Y', $result['time']); ?></td>
                                            <td><?php echo ($result["status"] == "confirmed") ? "<span class='label label-success'>confirmed</span>" : "<span class='label label-danger'>Awaiting Approval</span>"; ?></td>
                                           
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


	<?php include("footer.php"); ?>
