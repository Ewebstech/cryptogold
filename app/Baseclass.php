<?php
namespace App\Classes;
ob_start();
error_reporting(0);
date_default_timezone_set('Africa/Lagos');
			
require_once __DIR__ . '/SignupProcess.php';
require_once __DIR__ . '/LoginProcess.php';
require_once __DIR__ . '/SendMail.php';
require_once __DIR__ . '/QueryClass.php';
require_once __DIR__ . '/Cart.php';

use PDO;
use PHPMailer\PHPMailer\Exception;

class Baseclass{ 

    protected $db_conn;
    protected $error;

    public function __construct()
    {
        require("db.php");
        //start session
        if(!isset($_SESSION)):
            session_start();
        endif;
    }
    /**
     * Create Table Schema with the Column names defined in $params
     *
     * @param Array $params 
     * @param [type] $table
     * @return void
     */
    protected function create_table_schema(Array $params, $table)
    {
        foreach($params as $column => $value){
            if($column != 'PRIMARY'):
                if($column == "userid" or $column == "time" or $column == "id"){
                    $varchar = "50";
                    }
                else{
                    $varchar = "240";
                }
                $cols[] =  $column." VARCHAR (".$varchar.") NOT NULL,";
            endif;
            // Add json field to table
            if($column == "json"){
                $cols[] =  $column." json,";
            }
            if($column == "PRIMARY"){
                $cols[]  = "PRIMARY KEY (".$value.")";
            }
            
        }
        $column." VARCHAR (".$varchar.") NOT NULL,";
        $table_string = implode(' ', $cols);
        
        try{
                
            $create_tbl = "	Create Table if not exists `$table` ($table_string)";

            $c = $this->db_conn->exec($create_tbl);
            
        }catch (PDOException $e){
            // report error message
            $this->error =  $e->getMessage();
        }

        return ($this->error) ? $this->error : true;

    }

    /**
     * Method for Inserting to DB
     * Usage: The field names must correspond to table column names else app would break!
     * 'PRIMARY' => key - must always be inserted in the case of auto table creation.
     *  $params = [
     *    'userid' => uniqid(),
     *   'name' => ucwords(strtolower($_POST['name'])),
      *  'email' => $_POST['email'],
     *   'mobile' => $_POST['mobile'],
     *   'location' => $_POST['location'],
     *   'password' => $_POST['password'],
     *   'time'     => time(),
     *   'PRIMARY' => "email"
    *   ]; 
     * @param Array $params [contains all properties to be inserted]
     * @param [type] $table [Table to insert data into]
     * @return void
     */

    protected function insert_to_db(Array $params, $table)
    {
        //Get all column names
        foreach($params as $column => $value){
            if($column != 'PRIMARY'):
                $columns[] = $column;
            endif;
            if($column != 'PRIMARY'):
                $values[] = ':'.$column;
            endif;
        }
        $column_string = implode(', ', $columns);
         $value_string = implode(', ', $values);

        unset($params['PRIMARY']);
        //var_dump($params);
        $data = $params;
        try{
            $sql = "INSERT INTO $table ($column_string) VALUES ($value_string)";
            $stmt = $this->db_conn->prepare($sql);
            $stmt->execute($data);
        }catch(PDOException $e){
            $this->error =  $e->getMessages();
        }

        return ($this->error) ? $this->error : true;

    }

    /**
     * Update Database 
     * Usage: Method expects 3 arguments
     * $update_params = [
     *           'column' => 'Value to Update',
     *       ];
     *       $where = [
     *           'email' => 'ewebstech@ymail.com',
     *       ];
     * 
     * @param Array $params [Update Params]
     * @param [type] $table [DB table to update]
     * @param [type] $where [unique key to perform udpdate]
     * @return void
     */
    public function update_db(Array $params, $table, $where)
    {
        //Get all column names
        foreach($params as $column => $value){
            $columns[] = $column ." = " .":".$column;       
        }
        // Where ?
        foreach($where as $col => $val){
            $cols[] = $col ." = " .":".$col;
        }
        $column_string = implode(', ', $columns);
        $where_string = implode(' AND ', $cols);
        
        //unset($params['PRIMARY']);
       
        $data = array_merge($params,$where);
        //var_dump($data);
       // die;
        try{
            $sql = "UPDATE $table SET $column_string WHERE $where_string";
            $stmt = $this->db_conn->prepare($sql);									 
            $stmt->execute($data);
        }catch(PDOException $e){
            $this->error =  $e->getMessages();
        }

        return ($this->error) ? $this->error : true;


    }

    public function insert(Array $params, $table)
    {

        //Create Table If Not Exists
        $create_table = $this->create_table_schema($params, $table);
        
        $insert_data = $this->insert_to_db($params,$table);

        if($insert_data == true){
            $response['success'] = 'Data Successfully Saved';
            return $response['success'];
        } else{
            return $insert_data;
        }
    }

    public function pdoquery($query, $fetch=NULL, $extra_query=NULL, Array $where=NULL)
    {
        // Where ?
        foreach($where as $col => $val){
            $cols[] = $col ." = " .":".$col;
        }
        $where_str = implode(' AND ', $cols);
        $data = $where;
        if($where != NULL){
            $where_string = "WHERE ". $where_str; 
        }
        else{
            $where_string = ""; 
        }
        
        $pdo = $this->db_conn;
        try{
            $sql_query = $query . " " . $where_string . " " . $extra_query;
            
            $stmt = $pdo->prepare($sql_query);
            $stmt->execute($data);
            if($fetch == 'all'){
                $result = $stmt->fetchAll();
            }
            else{
                $result = $stmt->fetch();
            }
            
        }catch(PDOException $e){
            $this->error =  $e->getMessages();
        }
        
        return ($result) ? $result : $this->error;

    }

    public function Hash($arg)
    {
        $password = md5($arg);
        $sub_str = substr("$password", 0, 2);
        $c_pass = CRYPT("$password","$sub_str");
        $hashedpwd = substr("$c_pass", 2);

        return $hashedpwd;
    }

    public function redirectback($req='')
    {
        $from = $_SERVER['HTTP_REFERER'];
        if(($req)):
            header("location: ".$from."?$req");
        else:
            header("location: ".$from."");
        endif;
    }

    public function baseUrl($resource){
        return "http://".$_SERVER['HTTP_HOST']."/".$resource;
    }

    public function validate_email($param)
    {
        $pdo = $this->db_conn;
        $email = htmlentities($param);

        $stmt = $pdo->prepare("SELECT email FROM `members` where email = :email ");
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch();

        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    public function convert2grayscale($im){
       
        if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
        {
            return $im;

            //imagepng($im, 'dave.png');
        }
    }


    // for($key = 0; $key < count($_FILES['images']['name']); $key++)
	// 		{
			
	// 			$remove = array("/","~","!","+","=","#","'","$","&","Ǿ");
	// 			$filename = str_replace($remove,'',$_FILES['images']['name'][$key]);
	// 			$type = end(explode('.', strtolower($_FILES['images']['name'][$key])));
	// 			$explode = explode($type, $filename);
				
	// 			$newfilename = trim($explode[0],'.');

	// 			$ps = mysql_query("select * from items where `itemtitle`='$itemtitle'");
	// 			$check = mysql_fetch_assoc($ps);
				
	// 		//if(empty($check)){
			
	// 			$file_upload="true";
	// 			//$file_up_size=$_FILES['file_up']['size'][$key];
	// 			if ($_FILES['images']['size'][$key] > 25000000000){
	// 				$msg=$msg."Your uploaded file size is more than 2500KB
	// 	 			so please reduce the file size and then upload.<BR>";
	// 				$file_upload="false";
	// 			}
	// 			$time++;
			
	// 			$allowtype = array("jpg","png","gif","jpeg");
	// 			if (in_array($type, $allowtype))
	// 			{
	// 				$add = "../itemimages/$id/$filename";
	// 			}
	// 			else
	// 			{
	// 				$msg=$msg."BUT NO PICTURE WAS UPLOADED<BR>";
	// 				$file_upload="false";
	// 			}
	// 			if($file_upload=="true")
	// 			{
	// 				if(!is_dir("../itemimages")){ mkdir("../itemimages"); }
	// 				if(!is_dir("../itemimages/$id")){ mkdir("../itemimages/$id"); }
					
	// 				if(move_uploaded_file ($_FILES['images']['tmp_name'][$key], $add))
	// 				{
	// 					store_uploaded_image($add,358,410);	
				
	// 					$itemcode = uniqid().rand();	  
	// 					//create table
	// 					$id++;
	// 					$sql= "	Create Table if not exists `items`(
	// 					id VARCHAR (100),
	// 					itemtitle VARCHAR(200),
	// 					itemcategory VARCHAR(200),
	// 					standardprice VARCHAR(50),
	// 					discountprice VARCHAR (50),
	// 					quantity VARCHAR(10),
	// 					reviewstar VARCHAR(5),
	// 					imageurl VARCHAR (200),
	// 					status VARCHAR (20),
	// 					description TEXT,
	// 					shipping TEXT,
	// 					userid VARCHAR(30),
	// 					saletime VARCHAR (20),
	// 					time VARCHAR (20),
	// 					PRIMARY KEY ( id )
	// 					)";
	// 					// Execute query
	// 					if (!mysql_query($sql,$conn)) {
	// 								echo "Error creating table: " . mysql_error($conn);
	// 					}
	// 					else
	// 					{
	// 					if(! $conn )
	// 					{
	// 					  die('Could not connect:' . mysql_error());
	// 					}
					
	// 					$newadd = substr($add,3);
	// 					$username = $_SESSION["username"];
	// 					$checkstatus = mysql_query("select * from staffs where username = '$username'");
	// 					$stat = mysql_fetch_assoc($checkstatus);
	// 					if($stat["status"] != "admin"){
	// 						$status = "pending";
	// 					}
	// 					else{
	// 						$status = "confirmed";
	// 					}
	// 					$username = $_SESSION["username"];
	// 					$sql = "INSERT INTO `items` (id, itemtitle, itemcategory, standardprice, discountprice, quantity, reviewstar, status, imageurl, description, shipping, userid, saletime, time) values ('$itemcode', '$itemtitle', '$itemcategory', '$standardprice', '$discountprice', '$quantity', '$reviewstar', '$status', '$newadd', '$description', '$shipping', '$username', '$saletime', '$time')";
						
	// 						$retval = mysql_query($sql);
	// 						$time++;			
	// 						$k = $key + 1;
	// 						// do your coding here to give a thanks message or any other thing.
	// 						echo "<span class='data-reg'>Successfully Uploaded <br/> <img src='$add'>";
	// 						echo $key;
	// 						if(!$retval){
	// 							die(mysql_error());
	// 						}
		
	// 						} // error for table
	// 					}		
				
	// 				else {echo "Failed to upload file Contact Site admin to fix the problem";}
	// 				}
	// 				else{echo $msg;}

    //        			}//for loop ends
}
