<?php

use LDAP\Result;

Class Categories extends database{
    public function getcats(){
        $db = Database::getInstance();
    
        $query="SELECT * from category WHERE disabled = 0";
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