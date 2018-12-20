<?php
namespace App\Classes;

use PDO;

class LoginProcess extends Baseclass{

    protected $db_conn;
    protected $base;
    protected $errors;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
    }

    public function Login(Array $login_params){
       
        $email = filter_var($login_params['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            $this->base->redirectback();
        }
        // Filter and Get the Hashed Version of Password
        $password = filter_var($login_params['password'], FILTER_SANITIZE_STRING);
        $HashedPassword  = $this->base->Hash($password);
        //echo $HashedPassword;
        try{
            $stmt = $this->db_conn->prepare("SELECT `email` FROM `members` WHERE `email` = :email AND password = :password");
            $stmt->execute(['email' => $email, 'password' => $HashedPassword]);
            $result = $stmt->fetch();

            if($result){
                $_SESSION['username'] = $email;
                $output['success'] = "Login Successful";
            }
           
        }catch(PDOException $e){
            $this->errors = $e->getMessages();
        }

        return ($this->errors) ? $this->errors : $output;
        
        

    }

}