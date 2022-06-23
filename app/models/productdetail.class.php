<?php

use LDAP\Result;

Class Productdetail extends database{
    



    public function getdetails_byid(){
        
        $db = Database::getInstance();
        if(isset($_GET['product'])){
          $product = $_GET['product'];
    
            $query="select * from books where book_id = '$product'; ";
            $stmt= $db->prepare($query);
            $result = $stmt->execute();
           if($result){
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($data) && count($data) > 0){
                return $data[0];
            }
           
           }
           
           


           return false;
           
        
        }

    }
  
}