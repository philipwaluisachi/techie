<?php
class View {

  public function render($name , $include = false) {
    $path = "views/".$name.".php";
    if (file_exists($path)) {
      if ($include) {
          require ("views/".$name.".php");
      } else {
          require ("views/header.php");
          require ("views/".$name.".php");
          require ("views/footer.php");

      }
    } else {
      return false;
    }
  }
}

 ?>
