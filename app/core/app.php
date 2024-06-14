<?php

class App{
  private $controller = 'home';
  private $method = 'index';
  private $params  = [];

  public function __construct(){
   $url = $this->splitURL();
   
   if(file_exists('../app/controllers/' . strtolower($url[0]) . '.php')){
    $this->controller = strtolower($url[0]);
    unset($url[0]);
    require '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;
   }else{
    include '../app/views/404.php';
    exit();
   }

   if(isset($url[1]) && method_exists($this->controller, strtolower($url[1]))){
    $this->method = strtolower($url[1]);
    unset($url[1]);
   }

   $this->params = array_values($url);
   call_user_func_array([$this->controller, $this->method], $this->params);
  }

  private function splitURL(){
    $url = !empty($_GET['url']) ? $_GET['url'] : 'home';
    return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
  }
};
