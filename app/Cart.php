<?php
namespace App\Classes;

use PDO;

class Cart extends Baseclass{

    protected $db_conn;
    protected $base;
    protected $sendmail;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
        $this->sendmail = new SendMail();
    }

    public function addToCart(Array $params, $table){
          //Create Table If Not Exists
        $create_table = $this->base->create_table_schema($params, $table);

        $insert_data = $this->base->insert_to_db($params,$table);

        if($insert_data === true){
            
            return true;
        }
        else{
            return false;
        }
    }

    public function ShowCart(){
        $query = "SELECT * FROM `cart`";
        $extra_query = "GROUP BY product ORDER BY time desc";
        $where = [
            'cartid' => session_id()
        ];
        try{
            $cart_products = $this->base->pdoquery($query,$fetch="all",$extra_query,$where);
        }catch(Exception $e){
            $this->errors = $e->getMessage();
        }

        $cart .= "<table class='table'>";
        $i = 1;
        foreach($cart_products as $items){
            $cart.= "<tr>";
            $cart .= "<td>$items[product] x $items[qty]</td>";  
            $cart .= "<td><input type='number' value='$items[qty]' name='qty$i' /></td>";
            $cart.= "</tr>";

        }
        $cart .= "</table>";
        return $cart;
    }

}