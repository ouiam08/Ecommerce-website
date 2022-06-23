<?php

 class Category {

       

     public function create($DATA){
 
       $db =  Database::newInstance();
       
       $arr['category'] = ucwords($DATA->data) ;
    $_SESSION['error'] = "" ;
       if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['category']))){
          $_SESSION['error'] = "Please enter a valid category name" ;
       }

       if(!isset($_SESSION['error']) || $_SESSION['error'] == ""){
       $query = "INSERT INTO category (name) VALUES (:category)";
           $check = $db->write($query,$arr);
        if($check){
          return true ; }
       }

          return false ;


     }

     public function edit($id , $category){
      $db =  Database::newInstance();
      $arr['id'] = $id ;
      $arr['category'] = $category ;

      $query = "UPDATE category SET name = :category WHERE id = :id limit 1 ";
      return $db->write($query , $arr);
    }

    public function delete($id){

      $db =  Database::newInstance();
      $id = (int)$id ;
      $query = "DELETE  FROM category WHERE id = '$id' limit 1 ";
      return $db->write($query);
         
    }


    public function get_all(){
        $db =  Database::newInstance();

         return $db->read("SELECT * FROM category order by id desc");
         
    }


    public function get_one($id){
      $id = (int)$id ;
      $db =  Database::newInstance();
      $data = $db->read("SELECT * FROM category WHERE id = '$id' limit 1");

      return $data[0];
       
  }


    public function make_table($cats){

         $result = "" ;
        if(is_array($cats)){
            foreach ($cats as $cat_row){
            $color = $cat_row->disabled ? "#ae7c04" : "#5bc0de" ;
            $cat_row->disabled = $cat_row->disabled ? "Disabled" : "Enabled" ;
           
            $args = $cat_row->id. ",'".$cat_row->disabled."'";
            $edit_args = $cat_row->id. ",'".$cat_row->name."'";


              $result .= "<tr>";
               
                  $result .= '
                   <td><a href="basic_table.html#">'. $cat_row->name . '</a></td>
                   <td><span  onclick = "disable_row( '.$args.')" class="label label-info label-mini" style="cursor:pointer;background-color:'.$color.';">'. $cat_row->disabled . '</span></td>
                   <td>
                      
                       <button   onclick = "show_edit_category('.$edit_args. ',event)" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                       <button   onclick = "delete_row( '.$cat_row->id. ')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>

                   </td>
                   ' ;
                
                
              $result .= "</tr>";
            }
        }

         return $result ;
    }
     
 }