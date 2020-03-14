<?php
class controller {

  function __construct()  {
    $this->view = new View();
  }

  public function loadModel($name){
      $path ="models/".$name."_model.php";
      if (file_exists($path)) {
        require ($path);
        $model = $name."_model";
        $this->model = new $model();
        return $this->model;
      }
  }
}

 ?>
