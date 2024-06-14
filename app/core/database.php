<?php
class Database {
  private function db_connect(){
    try {
      $str = DB_TYPE . ':host=' . DB_HOST  . ';dbname='.DB_NAME;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
      ];
      return $db = new PDO($str, DB_USER, DB_PASS, $options);
    }catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function read($query, $data = []){
    $DB = $this->db_connect();
    $stm = $DB->prepare($query);
    return $stm->execute($data) ? $stm->fetchAll() : false;
  }
  
  public function write($query, $data = []){
    $DB = $this->db_connect();
    $stm = $DB->prepare($query);
    return $stm->execute($data) ? true : false;
  }
}