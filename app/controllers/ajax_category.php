<?php

Class Ajax_category extends Controller{


public function index()
{

   $data =file_get_contents("php://input");
   $data = json_decode($data);
   

    if(is_object($data) && isset($data->data_type)){
        $db = Database::getInstance();
        $category = $this->load_model('category');

         if($data->data_type == 'add_category'){
                //ADD NEW CATEGORY

               
                $check =  $category->create($data);
                    
                if($_SESSION['error'] != ""){
                    
                     $arr['message'] = $_SESSION['error']  ;
                     $_SESSION['error'] = "";
                     $arr['message_type'] = "error" ;
                     $arr['data_type'] = "add_new" ;

                     echo json_encode($arr);
                }else {
                    $arr['message'] = "Category added seccussfully !";
                    $arr['message_type'] = "info";
                   
                    $cats = $category->get_all();
                    $arr['data'] = $category->make_table($cats) ;
                    $arr['data_type'] = "add_new" ;
                    

                    echo json_encode($arr);
                }
         } else {
             if($data->data_type == 'disable_row'){
                $disabled = ($data->current_state == "Enabled") ?  1 : 0 ;
                $id = $data->id ;
                $query = "UPDATE category SET disabled = '$disabled' WHERE id = '$id' limit 1";
                $db->write($query);
                   
                $arr['message'] = "" ;
                $_SESSION['error'] = "";
                $arr['message_type'] = "info" ;
                $cats = $category->get_all();
                $arr['data'] = $category->make_table($cats) ;
                $arr['data_type'] = "disable_row" ;

                echo json_encode($arr);


             }else
             if($data->data_type == 'edit_category'){

                $category->edit($data->id,$data->category);
                $arr['message'] = "Your row was successfully edited" ;
                $_SESSION['error'] = "";
                $arr['message_type'] = "info" ;
                $cats = $category->get_all();
                $arr['data'] = $category->make_table($cats) ;
                $arr['data_type'] = "edit_category" ;

                echo json_encode($arr);


             }else
             if($data->data_type == 'delete_row'){
                $category->delete($data->id);
                $arr['message'] = "Your row was successfully deleted" ;
                $_SESSION['error'] = "";
                $arr['message_type'] = "info" ;
                $cats = $category->get_all();
                $arr['data'] = $category->make_table($cats) ;
                $arr['data_type'] = "delete_row" ;

                echo json_encode($arr);
             }


        
         
    }

}

}
}


?>