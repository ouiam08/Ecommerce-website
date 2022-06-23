<?php



Class Chekout extends database{
      private $error = "";

      
        public function verify_checkout($POST = ''){
            $_SESSION['error'] = "";
              if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone'])  && isset($_POST['code_postal'])  && isset($_POST['pays'])  && isset($_POST['ville'])  && isset($_POST['first_name'])  && isset($_POST['ligne_adress']) ){
            if(empty(trim($_POST['first_name'])) || !preg_match("/(^[A-Za-z]{3,16})/",trim($_POST['first_name']))){
                      $this->error .= "Please enter a valid first name <br>";
                   }

            if(trim(empty($_POST['last_name'])) || !preg_match("/(^[A-Za-z]{3,16})/",trim($_POST['last_name']))){
                            $this->error .= "Please enter a valid last  name <br>";
                         }
                         if(empty(trim($_POST['phone'])) || !preg_match("/(^[0-9]{10,15})/",trim($_POST['phone']))){
                              $this->error .= "Please enter a valid phone <br>";
                           }
                           if(empty(trim($_POST['code_postal'])) || !preg_match("/(^[0-9]{4,10})/",trim($_POST['code_postal']))){
                              $this->error .= "Please enter a valid zip code <br>";
                           }
                           if(trim(empty($_POST['pays'])) || !preg_match("/(^[A-Za-z]{3,16})/",trim($_POST['pays']))){
                              $this->error .= "Please enter a valid country<br>";
                           }
                           if(trim(empty($_POST['ville'])) || !preg_match("/(^[A-Za-z]{3,16})/",trim($_POST['ville']))){
                              $this->error .= "Please enter a valid city<br>";
                           }
                           if(trim(empty($_POST['ligne_adress']))){
                              $this->error .= "Please enter the full address <br>";
                           }}
                          
                           
                          

      $_SESSION['error'] = $this->error;
      if($_SESSION['error'] == ""){
            if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone'])  && isset($_POST['code_postal'])  && isset($_POST['pays'])  && isset($_POST['ville'])  && isset($_POST['first_name'])  && isset($_POST['ligne_adress']) ){
            $_SESSION['first_name']=$_POST['first_name'];
            $_SESSION['last_name']=$_POST['last_name'];
            $_SESSION['ligne_adress']=$_POST['ligne_adress'];
            $_SESSION['ville']=$_POST['ville'];
            $_SESSION['code_postal']=$_POST['code_postal'];
            $_SESSION['phone']=$_POST['phone'];
            $_SESSION['pays']=$_POST['pays'];

            header("Location:".ROOT."confirm");}
      }
     
        }



}