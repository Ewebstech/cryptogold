<?php //error_reporting(0);
require_once('../app/Baseclass.php');


use \App\Classes\SignupProcess as Signup;
use \App\Classes\Baseclass;
use \App\Classes\LoginProcess as Login;

$SignUp = new Signup();
$base = new Baseclass();
$Login = new Login();

if(isset($_POST['additem']))
{
			$id = 'DCP'.rand();
			$params = [
				'id' => $id,
				'product' => ucwords(strtolower($_POST['title'])),
				'category' => ucwords(strtolower($_POST['category'])),
				'price' => $_POST['price'],
				'quantity' => $_POST['quantity'],
				'shipping' => $_POST['shipping'],
				'status' => 'active',
				'time'     => time(),
				'PRIMARY' => "id"
			];
			$table = 'products';
			$insert = $base->insert($params, $table);
			
			if($insert['success']){
				header("location: additems.php?success=$_POST[title]");
			}
  }
	
  
  			
?>