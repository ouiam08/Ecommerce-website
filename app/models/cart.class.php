<?php

use LDAP\Result;

Class Categories extends database{
    public function get_cart_items(){
        $db = Database::getInstance();
    $id =  $_SESSION['cust_id'];
        $query="SELECT * from cart where cust_id = $id";
        $stmt= $db -> prepare($query);
        $result = $stmt->execute();
       if($result){
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        if(is_array($data) && count($data) > 0){
            return $data;
        }
       }
       return false;
    
    }
  
}