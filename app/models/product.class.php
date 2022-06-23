<?php
   
    class Product {

        public function create($DATA , $FILES){
 
            $_SESSION['error'] = "" ;

            $db =  Database::newInstance();

            $arr['author'] = ucwords($DATA->author) ;
            $arr['keywords'] = ucwords($DATA->keywords) ;
            $arr['title'] = ucwords($DATA->title) ;
            $arr['price'] = ucwords($DATA->price) ;
            $arr['stock'] = ucwords($DATA->stock) ;
            $arr['description'] = ucwords($DATA->description) ;
            $arr['language'] = ucwords($DATA->language) ;
            $arr['pages'] = ucwords($DATA->pages) ;
            //$arr['date'] = date("Y-m-d H:i:s") ;
            $arr['id_category'] = ucwords($DATA->id_category) ;
            $arr['image'] = "";
            
           
          
           
            if(!preg_match("#^[a-zA-Z ]+$#" , trim($arr['title']))){
               $_SESSION['error'] .= "Please enter a valid title for the book<br>" ;
            }

            if(!preg_match("#^[a-zA-Z. ]+$#" , trim($arr['author']))){
              $_SESSION['error'] .= "Please enter a valid name for the author<br>" ;
           }

           if(!is_numeric($arr['price'])){
            $_SESSION['error'] .= "Please enter a valid price for the book<br>" ;
         }

         if(!is_numeric($arr['stock'])){
          $_SESSION['error'] .= "Please enter a valid stock for the book<br>" ;
       }


          if(!is_numeric($arr['id_category'])){
          $_SESSION['error'] .= "Please enter a valid category for the book<br>" ;
       }

         if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['language']))){
          $_SESSION['error'] .= "Please enter a valid language for the book<br>" ;
       }

        if(!is_numeric($arr['pages'])){
        $_SESSION['error'] .= "Please enter a valid pages for the book<br>" ;
     }
        
        if(!preg_match("#^[a-zA-Z,. -]+$#" , trim($arr['keywords']))){
        $_SESSION['error'] .= "Please enter a valid keywords for the book<br>" ;
     }

    //    if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['description']))){
    //   $_SESSION['error'] .= "Please enter a valid description for the book<br>" ;
//    }

       $allowed[] = "image/jpeg" ;
       $size = 10 ;
       $size = ($size * 1024 * 1024);
       $folder = "uploads/";

         if(!file_exists($folder)){
            mkdir($folder,0777,true);
         }
        //CHECK FRO FILES
          foreach($FILES as $key => $img_row){
             if($img_row['error'] == 0 && in_array($img_row['type'],$allowed)){
                  if($img_row['size'] < $size ){
                     $destination = $folder . $img_row['name'];
                     move_uploaded_file($img_row['tmp_name'],$destination);
                     $arr[$key] = $destination ;
                    }else{
                    $_SESSION['error'] .= $key . "is bigger than required size <br>";
                  }
             }
          }
     
            if(!isset($_SESSION['error']) || $_SESSION['error'] == ""){
             
              
            $query = "INSERT INTO books (author,keywords,title,price,description,language,image,pages,id_category,stock) VALUES (:author,:keywords,:title,:price,:description,:language,:image,:pages,:id_category,:stock)";
                $check = $db->write($query,$arr);
             
             if($check){
               return true ; }
            }
     
               return false ;
     
     
          }
     
          public function edit($data,$FILES){
            
          
          $arr['id'] = $data->id  ;
          $arr['title'] = $data->title ;
          $arr['author'] = $data->author ;
          $arr['price'] = $data->price ;
          $arr['language'] = $data->language ;
          $arr['pages'] = $data->pages ;
          $arr['description'] = $data->description ;
          $arr['keywords'] = $data->keywords ;
          $arr['id_category'] = $data->id_category ;
          //$arr['image'] = $data->image ;
          $arr['stock'] = $data->stock ;
          $image_string = "";

          if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['title']))){
            $_SESSION['error'] .= "Please enter a valid title for the book<br>" ;
         }

         if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['author']))){
           $_SESSION['error'] .= "Please enter a valid name for the author<br>" ;
        }

        if(!is_numeric($arr['price'])){
         $_SESSION['error'] .= "Please enter a valid price for the book<br>" ;
      }

      if(!is_numeric($arr['stock'])){
       $_SESSION['error'] .= "Please enter a valid stock for the book<br>" ;
    }


       if(!is_numeric($arr['id_category'])){
       $_SESSION['error'] .= "Please enter a valid category for the book<br>" ;
    }

      if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['language']))){
       $_SESSION['error'] .= "Please enter a valid language for the book<br>" ;
    }

     if(!is_numeric($arr['pages'])){
     $_SESSION['error'] .= "Please enter a valid pages for the book<br>" ;
  }
     
     if(!preg_match("#^[a-zA-Z,.-]+$#" , trim($arr['keywords']))){
     $_SESSION['error'] .= "Please enter a valid keywords for the book<br>" ;
  }

    if(!preg_match("#^[a-zA-Z]+$#" , trim($arr['description']))){
   $_SESSION['error'] .= "Please enter a valid description for the book<br>" ;
}


$allowed[] = "image/jpeg" ;
$size = 10 ;
$size = ($size * 1024 * 1024);
$folder = "uploads/";

  if(!file_exists($folder)){
     mkdir($folder,0777,true);
  }
 //CHECK FRO FILES
   foreach($FILES as $key => $img_row){
      if($img_row['error'] == 0 && in_array($img_row['type'],$allowed)){
           if($img_row['size'] < $size ){
              $destination = $folder . $img_row['name'];
              move_uploaded_file($img_row['tmp_name'],$destination);
               
              $arr[$key] = $destination ;

              $image_string = "," . $key ." = : " . $key ;
             }else{
             $_SESSION['error'] .= $key . "is bigger than required size <br>";
           }
      }
   }


    if(!isset($_SESSION['error']) || $_SESSION['error'] == ""){          
           $db =  Database::newInstance();
           $query = "UPDATE books SET title = :title, price = :price, author = :author,keywords = :keywords,description = :description,pages = :pages,language = :language,stock = :stock,id_category = :id_category  $image_string  WHERE book_id = :id limit 1 ";
           return $db->write($query , $arr);
         }

        }
      
     
         public function delete($id){
     
           $db =  Database::newInstance();
           $id = (int)$id ;
           $query = "DELETE  FROM books WHERE book_id = '$id' limit 1 ";
           return $db->write($query);
              
         }
     
     
         public function get_all(){
             $db =  Database::newInstance();
     
              return $db->read("SELECT * FROM books");
              
         }
     
     
         public function make_table($cats , $model = null){
     
              $result = "" ;
             if(is_array($cats)){
                 foreach ($cats as $cat_row){
                
                 $edit_args = $cat_row->book_id. ",'".$cat_row->title."'";
                 
                 $info = array();
                 $info['id'] = $cat_row->book_id;
                 $info['author'] = $cat_row->author;
                 $info['title'] = $cat_row->title ;
                 $info['id_category'] = $cat_row->id_category ;
                 $info['price'] = $cat_row->price ;
                 $info['stock'] = $cat_row->stock ;
                 $info['language'] = $cat_row->language ;
                 $info['pages'] = $cat_row->pages ;
                 $info['description'] = $cat_row->description ;
                 $info['keywords'] = $cat_row->keywords ;
                 $info['image'] = $cat_row->image ;

                 $info = str_replace('"',"'",json_encode($info));

                 $one_cat = $model->get_one($cat_row->id_category);
     
                   $result .= "<tr>";
                   //$cat_row->id_category
                   
                       $result .= '
                        <td><a href="basic_table.html#">'. $cat_row->book_id . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->title . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->author . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->price . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->stock . '</a></td>
                        <td><a href="basic_table.html#">'.$one_cat->name  . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->language . '</a></td>
                        <td><a href="basic_table.html#">'. date("jS M Y H:i:s",strtotime($cat_row->date)) . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->pages . '</a></td>
                        <td><a href="basic_table.html#">'. $cat_row->description . '</a></td>
                        <td><a href="basic_table.html#"><img src="'. ROOT .  $cat_row->image . '" style="width:70px ; height : 70px ;"/></a></td>
                        <td></td>
                        <td>
                           
                            <button info="'.$info.'"  onclick = "show_edit_product('.$edit_args. ',event)" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button   onclick = "delete_row( '.$cat_row->book_id. ')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
     
                        </td>
                        ' ;
                     
                     
                   $result .= "</tr>";
                 }
             }
     
              return $result ;
         }
    }

?>