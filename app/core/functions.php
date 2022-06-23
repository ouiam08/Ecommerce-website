<?php

function show($data)
{
echo "<pre>";
print_r($data);
echo "<pre>";
}

function check_error()
{
    if(isset($_SESSION['error']) && $_SESSION['error'] != "")
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']); 
    }
}


function esc($data){
    return addslashes($data);
}

function convert_cur($price = 0){
    

    if(isset($_SESSION['cur'])){
        if($_SESSION['cur'] == "dh"){
            $val = 1;
            $c = "DH";
        }else if($_SESSION['cur'] == "usd"){
              $val = 0.1; 
              $c = "$";   
        }
        else if($_SESSION['cur'] == "euro"){
            $val =0.095;
            $c = "€";      
      }
    }
      else{
        $val = 1;
        $c = "DH";
      }

      echo $price * $val . $c ;


    }


