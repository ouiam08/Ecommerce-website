<?php


Class Admin extends Controller{

    
    public function index()
    {
         
        $User =  $this->load_model('User');
         
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }

        
       
       
        $data['page_title'] = "Admin";
        $this->view("admin/index",$data);
    }
    


    public function categories()
    {

        
        $User =  $this->load_model('User');
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }

        $db =  Database::newInstance();
        $categories =  $db->read("SELECT * FROM category");
        $category = $this->load_model("Category");
        $tbl_rows = $category->make_table($categories);
        $data['tbl_rows'] = $tbl_rows;  
       

        $data['current_page'] = "category";
        $data['page_title'] = "Admin - Categories";
        $this->view("admin/categories",$data);
    }

    public function products()
    {

        
        $User =  $this->load_model('User');
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }

        $db =  Database::newInstance();
        $products =  $db->read("SELECT * FROM books");

        $categories =  $db->read("SELECT * FROM category WHERE disabled = 0");


        $product = $this->load_model("Product");
        $category = $this->load_model("Category");
        $tbl_rows = $product->make_table($products,$category);
        $data['tbl_rows'] = $tbl_rows;  
        $data['categories'] = $categories;  
        

        $data['current_page'] = "product";
        $data['page_title'] = "Admin - Books";
        $this->view("admin/products",$data);
    }


    public function orders(){

        $User =  $this->load_model('User');
        $Order =  $this->load_model('Order');
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }

        $orders = $Order->get_all_orders();
        
        $data['orders'] = $orders ;
        $data['current_page'] = "orders";
        $data['page_title'] = "Admin - Orders";
        $this->view("admin/orders",$data);
    }


    public function users($type = "customers"){

        $User =  $this->load_model('User');
        $Order = $this->load_model('Order');
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }
    
        if($type == "customers"){
            $users = $User->get_customers();
        }else{
          
            $users = $User->get_admins();
        }

         if(is_array($users)){
             foreach($users as $key => $row){
                 $orders_num = $Order->get_orders_count($row->cust_id);
                 $users[$key]->orders_count = $orders_num ;
             }
         }
        $data['users'] = $users ;
        $data['page_title'] = "Admin - $type";
        $data['current_page'] = "users";
        $this->view("admin/users",$data);
    } 
    
    function settings($type){

        $User =  $this->load_model('User');
        $Settings = new Setting() ;
       
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }
    
         if(count($_POST) > 0){
             $Settings->save_settings($_POST);
            header("Location: " . ROOT . "admin/settings/socials");
            die;

         }
        $data['settings'] = $Settings->get_all_settings();
   

        $data['current_page'] = "Socials";
        $data['page_title'] = "Admin - $type";
        $this->view("admin/socials",$data);
    }

    public function  messages($type = ''){

        $User =  $this->load_model('User');
        $Message = $this->load_model('message');
        $user_data = $User->check_login(true , ["admin"]);
        if(is_object($user_data)){
            $data['user_data'] = $user_data;          
        }
        
        $type = 'Messages';
        $mode = "read";
         if(isset($_GET['delete'])){
             $mode = "delete";
         }
         if(isset($_GET['delete_confirmed'])){
            $mode = "delete_confirmed";
            $id = $_GET['delete_confirmed'];
            $messages = $Message->delete($id) ;

        }

       
    
        if($mode == "delete"){
            $id = $_GET['delete'];
            $messages = $Message->get_one($id) ;
        }else{
            $messages = $Message->get_all() ;

        }
      
        $data['mode'] = $mode ;
        $data['messages'] = $messages ;
        $data['page_title'] = "Admin - $type";
        $data['current_page'] = "messages";
        $this->view("admin/messages",$data);
     }
}