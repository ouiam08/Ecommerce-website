<?php

Class Ajax_product extends Controller{


public function index()
{
    if(count($_POST) > 0){

      $data = (object)$_POST ;
   
    }else{
   $data =file_get_contents("php://input");
   $data = json_decode($data); 
}
  
 
  //show($_FILES);
    if(is_object($data) && isset($data->data_type)){
        $db = Database::getInstance();
        $product = $this->load_model('Product');
        $category = $this->load_model('Category');
        

         if($data->data_type == 'add_product'){
                //ADD NEW PRODUCT
              
             
               $check =  $product->create($data,$_FILES);
                    
                if($_SESSION['error'] != ""){
                    
                     $arr['message'] = $_SESSION['error']  ;
                     $_SESSION['error'] = "";
                     $arr['message_type'] = "error" ;
                     $arr['data_type'] = "add_new" ;

                     echo json_encode($arr);
                }else {
                    $arr['message'] = "Product added seccussfully !";
                    $arr['message_type'] = "info";
                   
                    $cats = $product->get_all();
                    $arr['data'] = $product->make_table($cats,$category) ;
                    $arr['data_type'] = "add_new" ;
                    

                    echo json_encode($arr);
                }
         } else {
             if($data->data_type == 'disable_row'){
                $disabled = ($data->current_state == "Enabled") ?  1 : 0 ;
                $id = $data->id ;
                $query = "UPDATE books SET disabled = '$disabled' WHERE id = '$id' limit 1";
                $db->write($query);
                   
                $arr['message'] = "" ;
                $_SESSION['error'] = "";
                $arr['message_type'] = "info" ;
                $cats = $product->get_all();
                $arr['data'] = $product->make_table($cats) ;
                $arr['data_type'] = "disable_row" ;

                echo json_encode($arr);


             }else
             if($data->data_type == 'edit_product'){
               
                $product->edit($data,$_FILES);
                $arr['message'] = "Your row was successfully edited" ;
                $_SESSION['error'] = "";
                $arr['message_type'] = "info" ;
                $cats = $product->get_all();
                $arr['data'] = $product->make_table($cats,$category) ;
                $arr['data_type'] = "edit_product" ;

                echo json_encode($arr);


             }else
             if($data->data_type == 'delete_row'){
                $product->delete($data->id);
                $arr['message'] = "Your row was successfully deleted" ;
                $_SESSION['error'] = "";
                $arr['message_type'] = "info" ;
                $cats = $product->get_all();
                $arr['data'] = $product->make_table($cats, $category) ;
                $arr['data_type'] = "delete_row" ;

                echo json_encode($arr);
             }


        
         
    }

}

}
}


?>