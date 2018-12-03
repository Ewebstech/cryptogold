<?php
require_once('Baseclass.php');


use \App\Classes\SignupProcess as Signup;
use \App\Classes\Baseclass;
use \App\Classes\LoginProcess as Login;
use \App\Classes\Cart;

$SignUp = new Signup();
$base = new Baseclass();
$Login = new Login();
$cart = new Cart;


if(isset($_POST["signup"])){
   if(isset($_SESSION["dontregisterusername"]) or isset($_SESSION["dontregisterpassword"])):
        
    $base->redirectback('Bad Method');

   else:
        $params = [
            'userid' => uniqid(),
            'name' => ucwords(strtolower($_POST['name'])),
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'location' => $_POST['location'],
            'password' => $base->Hash($_POST['password']),
            'status' => 'nonverified',
            'time'     => time(),
            'PRIMARY' => "email"
        ];
        $table = 'members';
        $signupuser = $SignUp->signup($params, $table);

        if($signupuser == true):
            header("location: ../auth/confirm.php");
        else:
            header("location: ../auth/failedsignup.php");
        endif;
    endif;
}

if(isset($_POST["login"])){
    $params = [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    
    $get_login_status = $Login->login($params);

    if($get_login_status['success']){
        header("location: ../accounts/index.php");
    }
    else{
        header("location: ../auth/conduit.php?error=failedlogin");
    }
}

if(isset($_REQUEST['showcart'])){
  echo $cart->ShowCart();
}

if(isset($_REQUEST["addcart"])){

    $params = [
        'cartid' => session_id(),
        'product' => $_REQUEST['product_name'],
        'product_id' => $_REQUEST['product_id'],
        'qty' => $_REQUEST['qty'],
        'time'     => time(),
        'PRIMARY' => "time"
    ];
    $table = 'cart';
    //Create Table If Not Exists
    $AddToCart = $cart->addToCart($params, $table);
   
    if($AddToCart === true){
        echo $cart->ShowCart();
    
    }
    else{
        return "Data not added to cart";
    }

}

if(isset($_REQUEST["logout"])){

    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        session_destroy();
    }
    header("location: ../auth/conduit.php?loggedout");
    
}

if(isset($_REQUEST['mail_confirmation'])){

    //Check Get args with DB
    $param = htmlentities($_REQUEST['email']);
    $name = htmlentities($_REQUEST['name']);
    $checkemail = $base->validate_email($param);

    echo"You will be redirected in <b> 3 Seconds</b> \n";

    if($checkemail == false){
        $base->redirectback();
    }
    else{
       
        // confirm user and redirect to dashboard
        $table = 'members';

        $update_params = [
            'status' => 'verified'
        ];
        $where = [
            'email'  => $param,
            'name'  => $name
        ];
        
        $update_status = $base->update_db($update_params, $table, $where);

        if($update_status == true):
            // Send to dashboard
            sleep("3");
            $params = [
                'email' => $param,
                'password' => $_POST['password']
            ];
        
            
            $get_login_status = $Login->login($params);
        
            if($get_login_status['success']){
                header("location: ../accounts/index.php");
            }
            else{
                header("location: ../auth/conduit.php");
            }

            //header("location: ../accounts/index.php");
        endif;
        
    }

}