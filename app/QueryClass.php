<?php
namespace App\Classes;

use PDO;
use PHPMailer\PHPMailer\Exception;

class QueryClass extends Baseclass{

    protected $db_conn;
    protected $base;
    protected $errors;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
    }

    public function displayProductsById($id){
        $query = "SELECT * FROM `products`";
        $where = [
            'id' => $id
        ];
        try{
            $products = $this->base->pdoquery($query,$fetch="",$extra_query="",$where);
        }catch(Exception $e){
            $this->errors = $e->getMessage();
        }
        return ($products) ? $products : $this->errors;
    }

    public function displayItems($category){
        $query = "SELECT * FROM `products`";
        $extra_query = "GROUP BY product ORDER BY time desc";
        $where = [
            'category' => $category
        ];
        try{
            $products = $this->base->pdoquery($query,$fetch="all",$extra_query,$where);
        }catch(Exception $e){
            $this->errors = $e->getMessage();
        }
        return ($products) ? $products : $this->errors;
    }

    public function relatedItems($category){
        $query = "SELECT * FROM `products`";
        $extra_query = "GROUP BY product ORDER BY time asc";
        $where = [
            'category' => $category
        ];
        try{
            $products = $this->base->pdoquery($query,$fetch="all",$extra_query,$where);
        }catch(Exception $e){
            $this->errors = $e->getMessage();
        }
        return ($products) ? $products : $this->errors;
    }

    public function getAllCategories(){

        $query = "SELECT category FROM `products`";
        $extra_query = "GROUP BY category";
        $categories = $this->base->pdoquery($query,$fetch="all",$extra_query);
       
        return $categories;

    }

    public function getImage($category)
    {   
        switch($category){
            case 'ANALGESIC':
                $image = '../imgfiles/analgesics.jpg';
                break;
            case 'ANTIBIOTICS':
                $image = '../imgfiles/antibiotics.png';
                break;
            case 'ANTICONVULSANT':
                $image = '../imgfiles/anticonvulse.png';
                break;
            case 'B.P. DRUGS':
                $image = '../imgfiles/antibiotics.png';
                break;
            case 'COUGH/COLD':
                $image = '../imgfiles/syrups.jpg';
                break;
            case 'GENERAL':
                $image = '../imgfiles/general.jpeg';
                break;
            case 'GROCERY':
                $image = '../imgfiles/grocery.png';
                break;
            case 'OINTMENT / CREAM':
                $image = '../imgfiles/ointments.jpg';
                break;
            case 'SUPPLEMENTS':
                $image = '../imgfiles/supplements.gif';
                break;
            case 'VITAMINS':
                $image = '../imgfiles/vitamins.gif';
                break;
            default:
                $image = '../imgfiles/general.jpeg';
                break;

        }
      
        return $image;
          
    }

    //public function 


}
