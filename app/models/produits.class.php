<?php



Class Produits extends database{
    public function getbooks(){
        $db = Database::getInstance();
    
        $query="SELECT * from books where stock != 0";
        $stmt= $db->prepare($query);
        $result = $stmt->execute();
       if($result){
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        if(is_array($data) && count($data) > 0){
            return $data;
        }
       }
       return false;
    
    }


    public function getbooks_by_cats(){
        $err ="NO BOOKS FOUND";
        $db = Database::getInstance();
        if(isset($_GET['category'])){
          $category = $_GET['category'];
    
            $query="select * from books,category where books.id_category = category.id AND category.name like'$category' AND books.stock != 0; ";
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
           


           return false;
           
        
        }
  
    }

    public function getbooks_by_id($prod_ids = array()){
        
        $db = Database::getInstance();
    
        $query = "select * from books where book_id in ($prod_ids) AND stock != 0";
        $stmt= $db->prepare($query);
        $result = $stmt->execute();
       if($result){
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        if(is_array($data) && count($data) > 0){
            return $data;
        }
       }
       return false;
    }


    public function get_newest_items(){
        
        $db = Database::getInstance();
       
          $date ="2022-06-01 20:57:02";
    
            $query="select * from books where stock != 0 AND date >= '$date' order by date DESC limit 6;";
            $stmt= $db->prepare($query);
            $result = $stmt->execute();
            if($result){
                $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data)){
                    return $data;
                }
               }
               return false;
            
            }
          

    

    
}