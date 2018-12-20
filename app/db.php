
<?php       
include("../temp/credentials.php");

try{
    // create a PDO connection with the configuration data
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $this->db_conn = new PDO($dsn, $username, $password, $opt);
    
}catch (PDOException $e){
    // report error message
    $error =  $e->getMessage();
}
//return ($this->db_conn) ? $this->db_conn : $error;