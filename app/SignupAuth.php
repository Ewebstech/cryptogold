<?php
namespace App\Classes;
require('Baseclass.php');

use PDO;

class SignupAuth extends Baseclass{

    protected $db_conn;
    protected $base;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
    }
   
    public function validate_password($request){

       //echo"I am a request";
        $password = htmlentities($request);
        if(preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $password) and strlen($password) >= 6)
        {
            $output = "[<span style='color: green'><i class='fa fa-check'></i> Password is Secure </span>]"; 
            if(isset($_SESSION["dontregisterpassword"])):
                unset($_SESSION["dontregisterpassword"]);
            endif;
            $_SESSION["ptocheck"] = $password;
        }
        else{
            $output = "[<span style='color: red'><i class='fa fa-times'></i> Password Not Secure! </span>]";
            $_SESSION["dontregisterpassword"] = 1;
        }
        return $output;
    }

    public function validate_password_match($request)
    {
        $passwordmatch = htmlentities($request);
        if($passwordmatch == $_SESSION["ptocheck"]){
            $output = "[<span style='color: green'><i class='fa fa-check'></i> Passwords Match </span>]"; 

            if(isset($_SESSION["dontregisterpassword"])):
                unset($_SESSION["dontregisterpassword"]);
            endif;
        
        }
        else{
            $output = "[<span style='color: red'><i class='fa fa-times'></i> Passwords don't match </span>]";
            $_SESSION["dontregisterpassword"] = 1;
        }

        return $output;
    }

    public function email_exists($param){
        $pdo = $this->db_conn;
        $email = htmlentities($param);

        $stmt = $pdo->prepare("SELECT email FROM `members` where email = :email ");
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch();
        $output = "";
        $filtered_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$result and strlen($email) >= 6 and !$filtered_email === false){ 
            $output = "[<span style='color: green'><i class='fa fa-check'></i> Yes, Email is Available </span> ]"; 
            if(isset($_SESSION["dontregisterusername"])):
                unset($_SESSION["dontregisterusername"]);
            endif;
        }
        elseif(!$result and strlen($email) < 6){
            $output = "<span style='color: red'> [ <i class='fa fa-info-circle'></i> Email Address Too short!! </span> ]";
            $_SESSION["dontregisterusername"] = 1;
        }
        elseif($result){
            $output = "<span style='color: red'>[ <i class='fa fa-times'></i> Email Address Already Taken!! ] </span>";
            $_SESSION["dontregisterusername"] = 1;
        }

        return $output;
    }
}


