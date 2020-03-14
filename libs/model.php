<?php
class Model {

  function __construct(){
    $this->database = new Database(dbtype , dbhost, dbname , dbuser, dbpassword);
    $this->legit = new Legit();
  }
}

 ?>
