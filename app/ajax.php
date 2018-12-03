<?php
require_once __DIR__ . '/SignupAuth.php';
//
use \App\Classes\SignupAuth as SignupValidate;

$Validate = new SignupValidate();

// Get Requests sent
if(isset($_REQUEST["checkpassword"])){
    $request = $_REQUEST["checkpassword"];
    $msg = $Validate->validate_password($request);
    echo $msg;
}

if(isset($_REQUEST["matchpassword"])){
    $request = $_REQUEST["matchpassword"];
    $msg = $Validate->validate_password_match($request);
    echo $msg;
}

if(isset($_REQUEST["checkusername"])){
    $request = $_REQUEST["checkusername"];
    $msg = $Validate->email_exists($request);
    echo $msg;
}

