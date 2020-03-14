<?php
class Encryption {
  private static $salt = "SALT233568901";
  function __construct(){
  }

  public static function password($data){
    $encryted = md5($data);
    return $encryted;
  }
}

 ?>
