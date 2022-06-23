<?php

Class Setting{
 private $error = array();
 protected static $SETTINGS = null ;
     public function get_all_settings(){
     
         $db = Database::newInstance();
         $query = "SELECT * FROM settings";
         
         return $db->read($query);


     }

      
    static function __callStatic($name , $params){

      if(self::$SETTINGS){
        $settings =  self::$SETTINGS ;
      }else{
          $settings =  self::get_all_as_object() ;
      }
           if(isset($settings->$name)){
           return $settings->$name ;}
          
           return "" ;
        
     }

     public static function get_all_as_object(){
     
      $db = Database::newInstance();
      $query = "SELECT * FROM settings";
      $data = $db->read($query);
      $settings = (object)[];
       if(is_array($data)){
      foreach($data as $key => $row){
            $setting_name = $row->setting ;
            $settings->$setting_name = $row->value ;
       }

  }
            self::$SETTINGS = $settings ;
            return $settings;
}

    
      public function save_settings($POST){
        
      
        $db = Database::newInstance();

         foreach($POST as $key => $value){

            $arr = array();
            $arr['setting'] = $key ;

            if(strstr($key , "_link")){
               if(!strstr($value , "https://")){
                 $value = "https://".$value ;

               }
                 $arr['value'] = $value ;
             }else{
               $arr['value'] = $value ;
             }
            $query = "UPDATE settings SET value = :value where setting = :setting limit 1";
            $db->write($query , $arr);
          

         }

        
      }

      
    }

  
?>