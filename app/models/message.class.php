<?php

use LDAP\Result;

Class Message extends database{

    private $error = "";
    public function mesg($POST){
    
        $data = array();
        $db = Database::getInstance();
if(isset($POST['email'])&&isset($POST['name'])&&isset($POST['subject'])&&isset($POST['message'])){
       
        $email = trim($POST['email']);
       
        $name = $POST['name'];
        $subject = $POST['subject'];
        $message = $POST['message'];
        if(empty($email) || !preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
               $this->error .= "Please enter a valid email <br>";
        }
        if(empty($name) || !preg_match("/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/",$name)){
           $this->error .= "Please enter a valid name <br>";
        }
        if(empty($subject) ){
           $this->error .= "Please enter a subject  <br>";
        }
        if(empty($message) ){
            $this->error .= "Please enter a message  <br>";
         }

        
        if($this->error == ""){
            //save
              $query = "insert into  message(email,name,subject,message) values('$email','$name','$subject','$message')";
              $stmt= $db -> prepare($query);
              $result = $stmt->execute();
              if($result){
                $data = $stmt->fetchAll(PDO::FETCH_OBJ);
               
                   
                        header("Location: " . ROOT . "Thank_you");
                        die;
                    
                
               }
             
            
           
          
          }
        
    
          $_SESSION['error'] = $this->error;
           
                
            
        }

        
        }
        public function get_all(){
         $db =  Database::newInstance();
 
          return $db->read("SELECT * FROM message order by id_message desc");
          
     }
 
     public function get_one($id){
         $id = (int)$id ;
         $db =  Database::newInstance();
         $data = $db->read("SELECT * FROM message WHERE id_message = '$id' limit 1");
   
         return $data[0];
          
     }
 
     public function delete($id){
 
         $db =  Database::newInstance();
         $id = (int)$id ;
         $query = "DELETE  FROM message WHERE id_message = '$id' limit 1 ";
         return $db->write($query);
            
       }
      }

       

