<?php
ob_start();
if(!isset($_SESSION)) session_start();
error_reporting(0);
include("../database.php");
include("../admin/imageresize.php");
date_default_timezone_set('Africa/lagos');

if(isset($_POST["personalinfo"])){
  $name= mysql_real_escape_string($_POST['name']);
  $mobile= mysql_real_escape_string($_POST['mobile']);
  $gender= mysql_real_escape_string($_POST['gender']);
  $userid = mysql_real_escape_string($_POST['userid']);

  $update = mysql_query("UPDATE members set name='$name',mobile='$mobile',gender='$gender' where userid='$userid'");
  if($update) { header("location: index.php"); }
  else{
  	echo"this is the problem";
  }
}

if(isset($_POST["bainfo"])){
  $accountnumber= mysql_real_escape_string($_POST['accountnumber']);
  $bankname= mysql_real_escape_string($_POST['bankname']);
  $userid = mysql_real_escape_string($_POST['userid']);

  $update = mysql_query("UPDATE members set bankname='$bankname',accountnumber='$accountnumber' where userid='$userid'");
  if($update) { header("location: index.php"); }
}

if(isset($_POST["malemeasure"])){
  $ch= mysql_real_escape_string($_POST['ch']);
  $nk= mysql_real_escape_string($_POST['nk']);
  $tl = mysql_real_escape_string($_POST['tl']);
  $sh = mysql_real_escape_string($_POST['sh']);
  $sl = mysql_real_escape_string($_POST['sl']);
  $wt = mysql_real_escape_string($_POST['wt']);
  $trl = mysql_real_escape_string($_POST['trl']);
  $ta = mysql_real_escape_string($_POST['ta']);
  $userid = mysql_real_escape_string($_POST['userid']);
  $measurement = "ROUND CHEST - $ch, ROUND NECK - $nk, TRUNK LENGTH - $tl, SHOULDER - $sh, SLEEVE - $sl, WAIST - $wt, TROUSER LENGTH - $trl, TROUSER ANKLE - $ta";
  $update = mysql_query("UPDATE members set measurement='$measurement' where userid='$userid'");
  if($update) { header("location: index.php?male"); }
}

if(isset($_POST["femalemeasure"])){
  $nk= mysql_real_escape_string($_POST['nk']);
  $bst = mysql_real_escape_string($_POST['bst']);
  $hl = mysql_real_escape_string($_POST['hl']);
  $tmy = mysql_real_escape_string($_POST['tmy']);
  $wt = mysql_real_escape_string($_POST['wt']);
  $hp = mysql_real_escape_string($_POST['hp']);
  $tdl = mysql_real_escape_string($_POST['tdl']);
  $sl = mysql_real_escape_string($_POST['sl']);
  $tl = mysql_real_escape_string($_POST['tl']);
  $gl = mysql_real_escape_string($_POST['gl']);
  $userid = mysql_real_escape_string($_POST['userid']);
  $measurement = "ROUND NECK - $nk, BUST - $bst, HALF LENGTH - $hl, TUMMY - $tmy, WAIST - $wt, HIPS - $hp, TOP DRESS LENGTH - $tdl, SKIRT LENGTH - $sl, TROUSER LENGTH - $tl, GOWN LENGTH - $gl";
  $update = mysql_query("UPDATE members set measurement='$measurement' where userid='$userid'");
  if($update) { header("location: index.php?female"); }
}

if(isset($_POST['additem'])){
	
		date_default_timezone_set('Africa/Lagos');
		echo"here boss";
			$id = uniqid().rand().time();
			//$itemname = mysql_real_escape_string($_POST['itemname']);
			$itemtitle= mysql_real_escape_string($_POST['itemtitle']);
			$itemcategory = mysql_real_escape_string($_POST['itemcategory']);
			$standardprice = mysql_real_escape_string($_POST['standardprice']);
			$discountprice = mysql_real_escape_string($_POST['discountprice']);
			$quantity = mysql_real_escape_string($_POST['quantity']);
			$reviewstar = mysql_real_escape_string($_POST['reviewstar']);
			$description = mysql_real_escape_string($_POST['description']);
			$shipping = mysql_real_escape_string($_POST['shipping']);
			$saleenddate = mysql_real_escape_string($_POST['saleenddate']);
			$saletime = strtotime($saleenddate);
			
			$time = time();
			$microtime = microtime();
			
			for($key = 0; $key < count($_FILES['images']['name']); $key++)
			{
			
				$remove = array("/","~","!","+","=","#","'","$","&","Ǿ");
				$filename = str_replace($remove,'',$_FILES['images']['name'][$key]);
				$type = end(explode('.', strtolower($_FILES['images']['name'][$key])));
				$explode = explode($type, $filename);
				
				$newfilename = trim($explode[0],'.');

			$ps = mysql_query("select * from items where `itemtitle`='$itemtitle'");
			$check = mysql_fetch_assoc($ps);
				
			//if(empty($check)){
			
			$file_upload="true";
			//$file_up_size=$_FILES['file_up']['size'][$key];
			if ($_FILES['images']['size'][$key] > 250000000000){$msg=$msg."Your uploaded file size is more than 2500KB
	 		so please reduce the file size and then upload.<BR>";
			$file_upload="false";}
			$time++;
			
			$allowtype = array("jpg","png","gif","jpeg");
			if (in_array($type, $allowtype))
			{
				$add = "../itemimages/$id/$filename";
			}
			else
			{$msg=$msg."BUT NO PICTURE WAS UPLOADED<BR>";
			$file_upload="false";}
			if($file_upload=="true")
			{
				if(!is_dir("../itemimages")){ mkdir("../itemimages"); }
				if(!is_dir("../itemimages/$id")){ mkdir("../itemimages/$id"); }
				if(move_uploaded_file ($_FILES['images']['tmp_name'][$key], $add)){
									  
				
				store_uploaded_image($add,358,410);	
		
				$itemcode = uniqid().rand();	  
				//create table
				$id++;
				$sql= "	Create Table if not exists `items`(
				id VARCHAR (100),
				itemtitle VARCHAR(200),
				itemcategory VARCHAR(200),
				standardprice VARCHAR(50),
				discountprice VARCHAR (50),
				quantity VARCHAR(10),
				reviewstar VARCHAR(5),
				imageurl VARCHAR (200),
				status VARCHAR (20),
				description TEXT,
				shipping TEXT,
				userid VARCHAR(30),
				saletime VARCHAR (20),
				time VARCHAR (20),
				PRIMARY KEY ( id )
				)";
		// Execute query
		if (!mysql_query($sql,$conn)) {
					echo "Error creating table: " . mysql_error($conn);
		}
		else
		{
		if(! $conn )
		{
		  die('Could not connect:' . mysql_error());
		}
	
		$newadd = substr($add,3);
		$username = $_SESSION["username"];
		$checkstatus = mysql_query("select * from staffs where username = '$username'");
		$stat = mysql_fetch_assoc($checkstatus);
		if($stat["status"] != "admin"){
			$status = "pending";
		}
		else{
			$status = "confirmed";
		}
		$username = $_SESSION["username"];
		$sql = "INSERT INTO `items` (id, itemtitle, itemcategory, standardprice, discountprice, quantity, reviewstar, status, imageurl, description, shipping, userid, saletime, time) values ('$itemcode', '$itemtitle', '$itemcategory', '$standardprice', '$discountprice', '$quantity', '$reviewstar', '$status', '$newadd', '$description', '$shipping', '$username', '$saletime', '$time')";
		
			$retval = mysql_query($sql);
			$time++;			
			$k = $key + 1;
			// do your coding here to give a thanks message or any other thing.
			echo "<span class='data-reg'>Successfully Uploaded <br/> <img src='$add'>";
			echo $key;
			if(!$retval){
				die(mysql_error());
			}
		
		}
			
				
				}
				else {echo "Failed to upload file Contact Site admin to fix the problem";}
			}
			else{echo $msg;}
		/* }
		else{
			header("location: additems.php?success=$id&upload=$k");
		} */
  }//for loop ends
	header("location: uploadcenter.php?success=$id&upload=$k");
  }