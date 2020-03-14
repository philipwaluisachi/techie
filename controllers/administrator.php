<?php

class administrator extends controller {

  function __construct() {
    parent::__construct();
  }

  public function index(){
    $this->view->title = "Techie | Administrator";
    $this->view->render('administrator/index',1);
  }

  public function createCourses(){
    $this->view->title ="Techie | Create Courses";
    $this->view->courses = $this->model->createCourses();
    $this->view->render('administrator/create', 1);
  }

  public function manageCourses(){
    $this->view->title ="Techie | Manage Courses";
    $this->view->courses = $this->model->manageCourses();
    $this->view->render('administrator/manageCourses',1);
  }
}

 ?>
