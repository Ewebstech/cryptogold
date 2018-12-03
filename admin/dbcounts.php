<?php 

require_once __DIR__ .  "/../temp/database.php";

// Get all Number of Members
$members = $db_conn->query("select count(*) from members"); 
$number_of_members = $members->fetchColumn();



// $myy = mysql_query("select * from items where status='confirmed'"); 
// 				$value1 = mysql_num_rows($myy); 

              
//  $myyy = mysql_query("select * from invoice where status='unconfirmed'"); 
//               $value2 = mysql_num_rows($myyy); 
    