<!DOCTYPE html>
<html xmlns="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products Upload Center</title>
    <!-- Bootstrap Styles-->
    <?php include("header.php"); ?>
        <!--/. NAV TOP  -->
      <?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
     
     
		<div id="page-wrapper">
		  <div class="header">

						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="index.php">Products Upload Center</a></li>

					</ol>

		</div>
            <div id="page-inner">
              <!-- Begin Content -->
              <div class="row">
				<?php if(isset($_REQUEST[success])){ ?> 
				<div class="alert alert-success">
				Your Upload was successful, However, your uploaded items are awaiting moderation. Don't worry, we will inform you when all is ready.
				</div>
				<?php } elseif(!isset($_REQUEST[success])) { ?>
				<div class="col-md-12">
				<form action="process.php" method="post" class="form-group" ENCTYPE="multipart/form-data">
				<div class="form-group">
				<label>Product/Item Title</label>
				<input type="text" name="itemtitle" class="form-control"/>
				
				</div>
				<div class="form-group">
				<label>Product/Item Category</label>
				<input type="text" list="maincat" name="itemcategory" class="form-control" placeholder="Item's Category..." />
				<datalist id="maincat">
				<?php 				
				$check = mysql_query("select * from items group by itemcategory"); 
					while($item = mysql_fetch_assoc($check)) {
				?>
				<option value="<?php echo"$item[itemcategory]"; ?>">
				<?php } ?>
				</datalist>
				</div>
				
				<div class="form-group">
				<label>Standard Price (N)</label>
				<input type="number" name="standardprice" class="form-control">
				
				</div>
				<div class="form-group">
				<label>Discounted Price (N)</label>
				<input type="number" name="discountprice" class="form-control" />
				</div>
				<div class="form-group">
				<label>Quantity for Sale</label>
				<input type="number" name="quantity" class="form-control"/>
				</div>
				<div class="form-group">
				<label>No of Star Review</label>
				<select class="form-control" name="reviewstar">
				<option value="">Choose Figure</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				
				</select>
				</div>
			
				<div class="form-group">
				<label>Product Description</label>
				<textarea name="description" class="form-control" value="<?php $_POST["remark"]; ?>" placeholder="Give a description for this product"></textarea>
				</div>
				<div class="form-group">
				<label>Shipping Information</label>
				<textarea name="shipping" class="form-control" value="<?php $_POST["remark"]; ?>" placeholder="Please, provide shipping information about this product"></textarea>
				</div>
				
				<div class="form-group">
				<label>Sale End Day</label>
				<input type="date" name="saleenddate" class="form-control"/>
				</div>
				<div class="form-group">
				<label>Upload Product/Item Images</label>
				<input type='file' multiple name='images[]' value='select file'>
				</div>
				
				<div class="form-group">
				<input type="submit" class="btn btn-primary" name="additem" value="Submit Product for Processing" />
				</div>
			  </form>
		  </div>
		  <?php } ?>
		  </div>

              <!-- End Content -->

            </div>


	<?php include("footer.php"); 
		
	?>
