<?php


Class Signup extends Controller{

    public function index()
    {
        $ROWS=false;
        $data['page_title'] = "Signup";
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $user = $this->load_model("User");
            $user->signup($_POST);
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
    // show($_SESSION['CART'][0]['id']);
    $RWS=false; 
    if(isset($_SESSION['wishlist'])){
        $prod_ids= array_column($_SESSION['wishlist'],'id');
        $ids_str = "'" . implode("','",$prod_ids) . "'";
    $RWS = $prod ->getbooks_by_id($ids_str);
    
    }
    
    
    $data['rows_wish_list']=$RWS;


    

        $this->view("signup",$data);
    }
}