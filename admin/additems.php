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
					<h3 class="page-header"><i class="fa fa-files-o"></i> Add Products/Items</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Products/Items</li>
						
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
          
              <div class="row">
                  <div class="col-md-5">
				 
				  <?php if(isset($_REQUEST["success"])) { 
					
				  ?>
						<section>
							<div class="panel" >
							 <p class="text-center" style='background: green; color: #fff; padding: 10px;'><span>(<?php echo $_REQUEST["success"] ?>) has been added successfully to the inventory.</span></p>
							 <center><a href="additems.php" class="btn btn-danger"><i class="fa fa-plus"></i> Add More</a> </center>
							 <br clear="all" />
							</div>
						</section>
				         
					   
					<?php } ?>
				  
				 <?php if(!isset($_REQUEST["success"])) { ?>
                <section class="panel">
                          <header class="panel-heading">
                             Add New Products
                          </header>
                <div class="panel-body">
			
                <div class="row">
					   
				<div class="col-md-12">
				<form action="process.php" method="post" class="form-group" ENCTYPE="multipart/form-data">
				<div class="form-group">
				<label>Product/Item Title</label>
				<input type="text" name="title" class="form-control" />
				
				</div>
				<div class="form-group">
				<label>Product/Item Category</label>
				<input type="text" list="maincat" name="category" class="form-control" placeholder="Item's Category..." />
				<datalist id="maincat">
				<?php 				
				// $query = "select * from products"; 
				// $where = [
					
				// ]
				// $result = $baseclass->pdoquery($query, $where);
				// 	while($item = mysql_fetch_assoc($check)) {
				?>
				<option value="<?php //echo"$item[itemcategory]"; ?>">
				<?php // } ?>
				</datalist>
				</div>
				
				<div class="form-group">
				<label>Price (N)</label>
				<input type="number" name="price" class="form-control" />
				</div>
				<div class="form-group">
				<label>Quantity for Sale</label>
				<input type="number" name="quantity" class="form-control"/>
				</div>
				
			
				<div class="form-group">
				<label>Shipping Information</label>
				<textarea name="shipping" class="form-control" placeholder="Please, provide shipping information about this product"></textarea>
				</div>
				
				
				<div class="form-group">
				<input type="submit" class="btn btn-primary" name="additem" value="Publish Product" />
				</div>
			  </form>
		  </div>
		  </div>
		 </div> <!---/panel -->
                          
						  
                      </section>
				 <?php } ?>

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
