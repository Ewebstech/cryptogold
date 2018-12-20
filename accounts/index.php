<!DOCTYPE html>
<html xmlns="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounts Panel</title>
    <!-- Bootstrap Styles-->
    <?php include("header.php"); ?>
        <!--/. NAV TOP  -->
      <?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            <small>Welcome, <b><?php echo $row["name"];  ?></b></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="index.php">Dashboard</a></li>

					</ol>

		</div>
            <div id="page-inner">
              <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Personal Information
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php echo $row["name"]; ?> -- (<?php echo $row["gender"]; ?>)</span>
                                        - Name:
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php echo $row["email"]; ?></span>
                                        - Email Address:
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php echo $row["mobile"]; ?></span>
                                        - Mobile No:
                                    </a>

                                </div>
                                <div class="text-right">
                                    <a href="<?php echo"edit.php?editinf=Personal Information&userid=$row[userid]"; ?>">Edit &nbsp;<i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Login Information
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item">
                                          <span class="badge"><?php echo $row["userid"]; ?></span>
                                          - User ID:
                                      </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge"><?php echo $row["username"]; ?></span>
                                            - User Name:
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge"><?php echo "**********"; ?></span>
                                            - Password:
                                        </a>
                                     </div>
                                    <div class="text-right">
                                        <a href="#">Edit &nbsp;<i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bank Account Information
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php echo ($row["accountnumber"]) ? "$row[accountnumber]": "None"; ?></span>
                                        - Account Number:
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php echo ($row["bankname"]) ? "$row[bankname]" : "None"; ?></span>
                                        - Bank Name:
                                    </a>
                                 </div>
                                <div class="text-right">
                                  <a href="<?php echo"edit.php?editinf=Bank Account Information&userid=$row[userid]"; ?>">Edit &nbsp;<i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>

                  </div>
                  <br clear="all" />
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Measurement Information
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php echo (!empty($row["gender"])) ? "Your measurement goes here!": "No Data - Edit your personal information and specify your gender."; ?></span>
                                        <?php echo $row["measurement"]; ?>
                                    </a>

                                 </div>
                                <div class="text-right">
                                    <a href="<?php echo"edit.php?editinf=Measurement Information&userid=$row[userid]"; ?>">Edit &nbsp;<i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>

                  </div>
                </div>
                  </div>
            </div>


	<?php include("footer.php"); ?>
