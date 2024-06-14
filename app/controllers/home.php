<?php
class Home extends Controllers{
  function index() {
    $data['page_title'] = 'Home';
    $this->view('home', $data);
  }
}