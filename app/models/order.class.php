<?php
  
  Class Order extends Controller {

      public function get_orders_by_user($userid){
          $orders = false ;
          $db = Database::newInstance();
          $data['user_id'] = $userid ;
          $query = "SELECT * FROM orders where cust_id = :user_id";
          $orders = $db->read($query,$data);

          return $orders ;
       
      }


      public function get_orders_count($userid){
      
        $db = Database::newInstance();
        $data['user_id'] = $userid ;
        $query = "SELECT id_order FROM orders where cust_id = :user_id";
        $result = $db->read($query,$data);

        $orders = is_array($result) ? count($result) : 0 ;
        return  $orders ;
     
    }

      public function get_all_orders(){
        $orders = false ;
        $db = Database::newInstance();
       
        $query = "SELECT * FROM orders  order by date desc limit 6";
        $orders = $db->read($query);

          return $orders ;

      }

  }
?>