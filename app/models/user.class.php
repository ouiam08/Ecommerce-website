<?php

use LDAP\Result;

Class User{
 private $error = "";
     public function signup($POST){
     
         $data = array();
         $db = Database::getInstance();

        
         $data['email'] = trim($POST['email']);
        
         $data['password'] = trim($POST['password']);
         $password2 = trim($POST['password2']);
         $data['cust_type'] = "user";

         if(empty($data['email']) || !preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $data['email'])){
                $this->error .= "Please enter a valid email <br>";
         }
        //  if(empty($data['name']) || !preg_match("/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/",$data['name'])){
        //     $this->error .= "Please enter a valid name <br>";
        //  }
         if($data['password'] !== $password2){
            $this->error .= "Please enter a valid password <br>";
         }
         if(strlen(($data['password'] )) < 4){
            $this->error .= "Password must be at least 4 characters long <br>";
         }


         //check if email already exists 
         $sql = "select * from customer where email = :email limit 1";
         $arr['email'] = $data['email'];
         $check = $db->read($sql,$arr);
         if(is_array($check)){
             $this->error .= "This email exist already!";
         }
         $data['password']=hash('sha1',$data['password']);
         if($this->error == ""){
             //save
                $query = "insert into customer(email,password,cust_type) values(:email,:password,:cust_type)";
               
               $result = $db->write($query,$data);
               if($result){
                   header("Location: " . ROOT . "login");
                   die;
               }

         }
         $_SESSION['error'] = $this->error;
     }

    


     public function login($POST){
        $data = array();
        $db = Database::getInstance();

        
        $data['email'] = trim($POST['email']);
        $data['password'] = trim($POST['password']);
       

        if(empty($data['email']) || !preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $data['email'])){
               $this->error .= "Please enter a valid email <br>";
        }
        if($this->error == ""){
            $data['password']=hash('sha1',$data['password']);

            //confirm
              
        $sql = "select * from customer where email = :email && password = :password limit 1";
        $result = $db->read($sql,$data);
              if($result){

                  $_SESSION['cust_id'] = $result[0]->cust_id;
                  header("Location: " . ROOT . "home");
                  die;
              }
              else{
                $this->error .= "This user does not exist <br>";
              }

        }
        $_SESSION['error'] = $this->error;
    }

// public function check_login(){
//     if(isset($_SESSION['cust_id']))
//     {
//         $arr['id'] =$_SESSION['cust_id'];
//         $query="select * from customer where cust_id = :id limit 1";
//         $db = Database::getInstance();
//         $result=$db->read($query,$arr);
//         if(is_array($result))
//         {
//             return $result[0];
            
            
//         }
//     }
//     return false;
// }

public function check_login($redirect = false , $allowed = array()){
    $db = Database::newInstance();
       if(count($allowed) > 0 ){
       
         $arr['id']  = $_SESSION['cust_id'] ;
         $query = "SELECT * FROM customer WHERE cust_id = :id limit 1" ;
         $result=$db->read($query,$arr);
       
         if(is_array($result))
    {
        $result = $result[0];

      if(in_array($result->cust_type , $allowed))   {
        return $result ;
     }else{
        header("Location: " . ROOT . "login");
            die; 
}
}

}else{
  if(isset($_SESSION['cust_id']))
{
    $arr = false ;
    $arr['id'] =$_SESSION['cust_id'];
    $query="select * from customer where cust_id = :id limit 1";
    $result=$db->read($query,$arr);
    if(is_array($result))
    {
        return $result[0];
        
        
    }
}
 if($redirect){
     header("Location : " . ROOT . "login");
     die ;
 } }
return false;
}

        public function logout(){
              if(isset($_SESSION['cust_id']))
              {
                  session_destroy();
              }
             
              header("Location: " . ROOT . "home");
              die;

        }


        

        public function get_customers(){
            $db = $db = Database::newInstance();
            $err = false ;
            $arr['cust_type'] = "user";
            $query = "SELECT * FROM customer WHERE cust_type = :cust_type";
            $result = $db->read($query,$arr);
  
            if(is_array($result)){
                return $result;
            }
  
              return false ;
  
  
      }
  
  
      public function get_admins(){
          $db = $db = Database::newInstance();
          $err = false ;
          $arr['cust_type'] = "admin";
          $query = "SELECT * FROM customer WHERE cust_type = :cust_type";
          $result = $db->read($query,$arr);
  
          if(is_array($result)){
              return $result;
          }
  
            return false ;
  
  
    }

       
}