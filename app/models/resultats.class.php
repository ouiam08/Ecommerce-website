<?php

use LDAP\Result;

Class Resultats extends database{


    public function get_results(){
        $err ="NO BOOKS FOUND";
        $db = Database::getInstance();
        if(isset($_GET['prod_result'])){
          $key = $_GET['prod_result'];
    
            $query="select * from Books where keywords like '%$key%'; ";
            $stmt= $db->prepare($query);
            $result = $stmt->execute();
           if($result){
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($data) && count($data) > 0){
                return $data;
            }
           else {
               return $err;
           }
           }
           


          
           
        
        }

   return null;
    }}