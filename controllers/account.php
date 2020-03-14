<?php

class account extends controller {

  function __construct() {
    parent::__construct();
  }

  public function index(){
    $this->view->title ="Techie | Account";
    // $this->view->courses = $this->model->toturs();
    $this->view->render('account/index');
  }
}

 ?>
