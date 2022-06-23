<?php

Class Ajax_cart extends Controller{

public function index()
{

}
public function delete_item($data = "")
{
$obj = json_decode($data);
$id = esc($obj->id);
if(isset($_SESSION['CART'])){
    foreach ($_SESSION['CART'] as $key => $item){
        if($item['id'] == $id){
           unset($_SESSION['CART'][$key]);
           $_SESSION['CART'] = array_values($_SESSION['CART']);
            break;
        }
    }
}
}
public function edit_quantity($data = "")
{
$obj = json_decode($data);
$quantity =  esc($obj->quantity);
$id = esc($obj->id);
if(isset($_SESSION['CART'])){
    foreach ($_SESSION['CART'] as $key => $item){
        if($item['id'] == $id){
            $_SESSION['CART'][$key]['qty'] = (int)$quantity;
            break;
        }
    }
}

$obj->data_type = "edit_quantity";
print_r(json_encode($obj));

}
}