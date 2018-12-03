<?php ob_start(); ?>
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
      <?php
        $section = $_REQUEST["editinf"];
        $request = $_REQUEST["userid"];
        $query = mysql_query("select * from `members` where userid='$request'");
        $data = mysql_fetch_assoc($query);

      ?>
		<div id="page-wrapper">
		  <div class="header">

						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="index.php">Edit - <?php echo $section; ?></a></li>

					</ol>

		</div>
            <div id="page-inner">
              <!-- Begin Content -->
              <?php if($section == "Personal Information") { ?>
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo"$data[name]"; ?>" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control" name='email' value="<?php echo"$data[email]"; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="optionsRadiosInline1" value="Male" checked="">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="optionsRadiosInline2" value="Female">Female
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="number" class="form-control" name='mobile' value="<?php echo"$data[mobile]"; ?>" >
                    </div>

                    <input type="hidden" name="userid" value="<?php echo"$data[userid]"; ?>" />
                    <div class="form-group">
                        <button type="submit" name="personalinfo" class="btn btn-success"><i class="fa fa-pencil"></i> Update Information</button>
                    </div>
                </form>
          <?php  } ?>

            <?php if($section == "Bank Account Information") { ?>
              <form action="process.php" method="post">
                  <div class="form-group">
                      <label>Account Number</label>
                      <input type="text" class="form-control" name="accountnumber" value="<?php echo"$data[accountnumber]"; ?>" placeholder="Account Number">
                  </div>
                  <div class="form-group">
                      <label>Bank Name</label>
                      <input type="text" class="form-control" name='bankname' value="<?php echo"$data[bankname]"; ?>" placeholder="Bank Name"/>
                  </div>
                  <input type="hidden" name="userid" value="<?php echo"$data[userid]"; ?>" />
                  <div class="form-group">
                      <button type="submit" name="bainfo" class="btn btn-success"><i class="fa fa-pencil"></i> Update Information</button>
                  </div>
              </form>
        <?php  } ?>

        <?php if($section == "Measurement Information" and $data["gender"] == "Male") {
            $dat = explode(',',$data["measurement"]);
            error_reporting(0);
          ?>
          <form action="process.php" method="post">
              <div class="form-group">
                  <label>Round Chest (CH)</label>
                  <input type="text" class="form-control" name="ch" value="<?php $ar1 = explode('- ',$dat[0]); echo $ar1[1]; ?>" placeholder="Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Round Neck (NK)</label>
                <input type="text" class="form-control" name="nk" value="<?php $ar1 = explode('- ',$dat[1]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Trunk Length (TL)</label>
                <input type="text" class="form-control" name="tl" value="<?php $ar1 = explode('- ',$dat[2]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Shoulder (SH)</label>
                <input type="text" class="form-control" name="sh" value="<?php $ar1 = explode('- ',$dat[3]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Sleeve (SL)</label>
                <input type="text" class="form-control" name="sl" value="<?php $ar1 = explode('- ',$dat[4]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Waist (WT)</label>
                <input type="text" class="form-control" name="wt" value="<?php $ar1 = explode('- ',$dat[5]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Trouser Length (TL)</label>
                <input type="text" class="form-control" name="trl" value="<?php $ar1 = explode('- ',$dat[6]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Trouser Ankle (TA)</label>
                <input type="text" class="form-control" name="ta" value="<?php $ar1 = explode('- ',$dat[7]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>

              <input type="hidden" name="userid" value="<?php echo"$data[userid]"; ?>" />
              <div class="form-group">
                  <button type="submit" name="malemeasure" class="btn btn-success"><i class="fa fa-pencil"></i> Update Information</button>
              </div>
          </form>
    <?php  } ?>

    <?php if($section == "Measurement Information" and $data["gender"] == "Female") {
            $dat = explode(',',$data["measurement"]);
            error_reporting(0);
          ?>
          <form action="process.php" method="post">
              
              <div class="form-group">
                  <label>Round Neck (NK)</label>
                <input type="text" class="form-control" name="nk" value="<?php $ar = explode('- ',$dat[0]); echo $ar[1];?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Bust (BST)</label>
                <input type="text" class="form-control" name="bst" value="<?php $ar1 = explode('- ',$dat[1]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Half Length (HL)</label>
                <input type="text" class="form-control" name="hl" value="<?php $ar2 = explode('- ',$dat[2]); echo $ar2[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Tommy (TMY)</label>
                <input type="text" class="form-control" name="tmy" value="<?php $ar4 = explode('- ',$dat[3]); echo $ar4[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Waist (WT)</label>
                <input type="text" class="form-control" name="wt" value="<?php $ar1 = explode('- ',$dat[4]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Hips (HP)</label>
                <input type="text" class="form-control" name="hp" value="<?php $ar1 = explode('- ',$dat[5]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Top Dress Length (TDL)</label>
                <input type="text" class="form-control" name="tdl" value="<?php $ar1 = explode('- ',$dat[6]); echo $ar1[1];?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Skirt Length (SL)</label>
                <input type="text" class="form-control" name="sl" value="<?php $ar1 = explode('- ',$dat[7]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Trouser Length (TL)</label>
                <input type="text" class="form-control" name="tl" value="<?php $ar1 = explode('- ',$dat[8]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>
              <div class="form-group">
                  <label>Gown Length (GL)</label>
                <input type="text" class="form-control" name="gl" value="<?php $ar1 = explode('- ',$dat[9]); echo $ar1[1]; ?>" placeholder=" Input Measured Figure">
              </div>

              <input type="hidden" name="userid" value="<?php echo"$data[userid]"; ?>" />
              <div class="form-group">
                  <button type="submit" name="femalemeasure" class="btn btn-success"><i class="fa fa-pencil"></i> Update Information</button>
              </div>
          </form>
    <?php  } ?>
              <!-- End Content -->

            </div>


	<?php include("footer.php"); ?>
