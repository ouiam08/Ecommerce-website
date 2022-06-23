<?php


Class Modify  extends Controller{

    private $redirect_to = "";

    public function index($cur = '')
    {
        $ROWS=false;
        $this->set_redirect();
        
         $_SESSION['cur']=$cur;
            


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
