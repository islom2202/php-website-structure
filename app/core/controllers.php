<?php
class Controllers{

  protected function view($view,  $data = []) {
    if(file_exists('../app/views/' . $view . '.php')){
      include '../app/views/' . $view . '.php';
    }
  }

  protected function loadModel($model) {
    if(file_exists('../app/models/' . $model . '.php')){
      include '../app/models/' . $model . '.php';
      return new $model;
    }else{
      return false;
    }
  }
  
};