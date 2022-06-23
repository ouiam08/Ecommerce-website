<?php


Class Logout extends Controller{


    public function index()
    {
        $ROWS=false; 
        $User =  $this->load_model('User');
        $User->logout();

     
    }
}