<?php
class About extends Controllers{
  function index() {
    $data['page_title'] = 'Home';
    $this->view('about', $data);
  }
}