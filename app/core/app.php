<?php

Class App 
{
    protected $controller = "home";
    protected $method = "index";
    protected $params;
    public function __construct()
    {
        $url = $this->parseURL();
   

        //test si le 1er param est un controlleur si oui il le supprime
        if(file_exists("../app/controllers/" . strtolower($url[0]) .".php"))
        {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

         //test si le 2eme param est une methode d'un controlleur si oui il le supprime
        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        if(isset($url[1])){
            $url[1] = strtolower($url[1]);
            if(method_exists($this->controller,$url[1]))
            {
                $this->method= $url[1];
                unset($url[1]);
            }
        }

        //pour que les autre parametre commence de 0
        $this->params = (count($url) > 0) ? $url : ["home"];

        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    //traite url et return les different champ demander
    private function parseURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/",filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
    }
}