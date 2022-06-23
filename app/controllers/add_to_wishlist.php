<?php


Class Add_to_wishlist  extends Controller{

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
            if(isset($_SESSION['wishlist'])){
                $ids = array_column($_SESSION['wishlist'],"id");
                if(in_array($ROWS->book_id,$ids)){

                    $key = array_search($ROWS->book_id,$ids);
                 
                }else{
                    $arr = array();
                    $arr['id'] = $ROWS->book_id;
                   

                    $_SESSION['wishlist'][] = $arr;
                }
             } else{
                    $arr = array();
                    $arr['id'] = $ROWS->book_id;
                    

                    $_SESSION['wishlist'][] = $arr;
                }
            }


            $this->redirect();
         }
        
        public function remove($id = ''){
            $this->set_redirect();


            $id = esc($id);
                if(isset($_SESSION['wishlist'])){
                    foreach ($_SESSION['wishlist'] as $key => $item){
                        if($item['id'] == $id){
                           unset($_SESSION['wishlist'][$key]);
                           $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);
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
