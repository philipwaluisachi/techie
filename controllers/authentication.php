<?php
/**
 *
 */
class authentication extends controller {

  function __construct(){
    parent::__construct();
  }

  public function login(){
    $this->view->title = "Zee | Login";
    $this->view->render('authentication/index');
  }

  public function signup(){
    $this->view->title = "Zee | Signup";
    $this->view->render('authentication/signup');
  }

  public function logout(){
    $this->model->logout();
  }

  public function submit(){
    $this->model->signup();
  }

  public function loginSubmit(){
    $this->model->login();
  }
}

 ?>
