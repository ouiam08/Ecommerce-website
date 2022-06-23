<?php


Class Productdetails extends Controller{


    public function index()
    {
        $ROWS=false;
        $User =  $this->load_model('User');
        $user_data = $User -> check_login();
        
        if(!empty($user_data)){
            $data['user_data'] = $user_data;          
        }

        $Search =  $this->load_model('Resultats');
        $user_search = $Search -> get_results();
        
        if(!empty( $user_search)){
            $data['user_search'] =  $user_search;          
        }

        $prod =  $this->load_model('Produits');
        if(isset($_SESSION['CART'])){
            $prod_ids= array_column($_SESSION['CART'],'id');
            $ids_str = "'" . implode("','",$prod_ids) . "'";
       $ROWS = $prod ->getbooks_by_id($ids_str);

        }
    

    if(is_array($ROWS)){
        foreach($ROWS as $key => $row){
            foreach($_SESSION['CART'] as $item){
                if($row->book_id == $item['id']){
                    $ROWS[$key]->cart_qty = $item['qty'];
                    break;
                }
            }
        }
    }
$data['sub_total'] = 0;  

if($ROWS){
    foreach($ROWS as $key => $row){
       $mytotal =  $row->price * $row->cart_qty;


       $data['sub_total'] += $mytotal;
            }
}

$data['rows']=$ROWS;


$RWS=false; 
if(isset($_SESSION['wishlist'])){
    $prod_ids= array_column($_SESSION['wishlist'],'id');
    $ids_str = "'" . implode("','",$prod_ids) . "'";
$RWS = $prod ->getbooks_by_id($ids_str);

}


$data['rows_wish_list']=$RWS;
    
        $Cats =  $this->load_model('Categories');
        $Cats_data = $Cats -> getcats();
        if(!empty($Cats_data)){
            $data['Cats_data'] = $Cats_data;          
        }
        
        $prod_data = $prod -> getbooks();
        if(!empty($prod_data)){
            $data['prod_data'] = $prod_data;          
        }

        $prod_det =  $this->load_model('Productdetail');
        $prod_details = $prod_det -> getdetails_byid();
        if(!empty($prod_details)){
            $data['prod_details'] = $prod_details;          
        }else{
            $data['prod_details'] = "false";
        }
        
        $prod_by_cat = $prod -> getbooks_by_cats();
        if(!empty($prod_by_cat)){
            $data['prod_by_cat'] = $prod_by_cat;  }

            $data['page_title'] = "MORE DETAILS";

        
        $prod_by_date = $prod ->  get_newest_items();
        $data['prod_by_date'] = $prod_by_date;


    if($data['prod_details'] == "false"){
        $this->view("404",$data);}
        else{
        $this->view("productdetails",$data);}
    }
}