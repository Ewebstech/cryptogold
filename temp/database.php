<?php
include("credentials.php");

try{
    // create a PDO connection with the configuration data
    $db_conn = new PDO($dsn, $username, $password);
    
    // display a message if connected to database successfully
    // if($db_conn){
    //    // echo "Connected to the <strong>$db</strong> database successfully!";
    //        }
   }catch (PDOException $e){
    // report error message
    echo $e->getMessage();
   }
