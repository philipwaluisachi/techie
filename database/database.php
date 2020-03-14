<?php
class database extends PDO {

  function __construct($dbtype , $dbhost , $dbname, $dbuser , $dbpassword){
    parent::__construct($dbtype.":host=".$dbhost.";dbname=".$dbname, $dbuser , $dbpassword);
    $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   }
}

 ?>
