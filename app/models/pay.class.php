<?php

use LDAP\Result;

Class Pay extends database{
   
        public function verify_checkout($POST = ''){
         
              if(isset($_POST['payement_methode'])  ){
           
               
                $_SESSION['payement_methode']=$_POST['payement_methode'];
                header("Location:".ROOT."payement");}       
        }
        public function order_save($rows,$user,$t){
     
            $data = array();
            $db = Database::getInstance();
    
           
           $cust_id= $user->cust_id;
           $first_name = $_SESSION['first_name'];
           $last_name = $_SESSION['last_name'];
           $ligne_adress = $_SESSION['ligne_adress'];
           $ville= $_SESSION['ville'];
           $code_postal = $_SESSION['code_postal'];
           $phone = $_SESSION['phone'];
           $pays = $_SESSION['pays'];
           $payement_methode =$_SESSION['payement_methode'];
            $total = $t;
            $_SESSION['total'] = $t;
           foreach($rows as $row){
            $id_book =  $row->book_id;
     
            //save
    
                    $query = "insert into orders(cust_id,book_id,first_name,last_name,phone,zip,country,city,full_address,method,total) values($cust_id,$id_book,'$first_name','$last_name',$phone,$code_postal,'$pays','$ville','$ligne_adress','$payement_methode','$total')";
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
    
    
           
                
            
            
        }

       

