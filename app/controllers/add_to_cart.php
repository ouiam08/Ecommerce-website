<?php


Class Add_to_cart extends Controller{

    private $redirect_to = "";

    public function index($id = '')
    {
        $ROWS=false;
        $this->set_redirect();
         $id =  esc($id);
         $DB = database::getInstance();
         $ROWS = $DB->read("select * from books where book_id = :id limit 1",["id"=>$id]);

         if($ROWS){
            $ROWS = $ROWS[0];
            if(isset($_SESSION['CART'])){
                $ids = array_column($_SESSION['CART'],"id");
                if(in_array($ROWS->book_id,$ids)){

                    $key = array_search($ROWS->book_id,$ids);
                    $_SESSION['CART'][$key]['qty']++;
                }else{
                    $arr = array();
                    $arr['id'] = $ROWS->book_id;
                    $arr['qty'] = 1;

                    $_SESSION['CART'][] = $arr;
                }
             } else{
                    $arr = array();
                    $arr['id'] = $ROWS->book_id;
                    $arr['qty'] = 1;

                    $_SESSION['CART'][] = $arr;
                }
            }


            $this->redirect();
         }
        public function add_quantity($id = ''){
            $this->set_redirect();
                $id = esc($id);
                if(isset($_SESSION['CART'])){
                    foreach ($_SESSION['CART'] as $key => $item){
                        if($item['id'] == $id){
                            $_SESSION['CART'][$key]['qty'] += 1;
                            break;
                        }
                    }
                }

                $this->redirect();
           
        }
        public function subtract_quantity($id = ''){
            $this->set_redirect();


            $id = esc($id);
                if(isset($_SESSION['CART'])){
                    foreach ($_SESSION['CART'] as $key => $item){
                        if($item['id'] == $id){
                            $_SESSION['CART'][$key]['qty'] -= 1;
                            break;
                        }
                    }
                }
                $this->redirect();

        }
        public function remove($id = ''){
            $this->set_redirect();


            $id = esc($id);
                if(isset($_SESSION['CART'])){
                    foreach ($_SESSION['CART'] as $key => $item){
                        if($item['id'] == $id){
                           unset($_SESSION['CART'][$key]);
                           $_SESSION['CART'] = array_values($_SESSION['CART']);
                            break;
                        }
                    }
                }
                $this->redirect();

        }
        private function redirect(){
                    header(("Location: ") . $this->redirect_to);
                    die;
        }

        private function set_redirect(){
            if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != ""){
                $this->redirect_to =$_SERVER['HTTP_REFERER'];
            }
            else{
                $this->redirect_to = ROOT . "shop";

            }

        }









      
          
    }
