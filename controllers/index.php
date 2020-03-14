<?php

class index extends controller {

  function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->view->title = "Techie";
    $this->view->render('index/index');
  }

  public function courses(){
    $this->view->title ="Techie | Courses";
    $this->view->courses = $this->model->courses();
    $this->view->render('index/courses');
  }

  public function course(){
    $this->view->title ="Techie | Courses";
    // $this->view->courses = $this->model->course();
    $this->view->render('index/course');
  }

  public function pricing(){
    $this->view->title ="Techie | Pricing";
    // $this->view->courses = $this->model->toturs();
    $this->view->render('index/pricing');
  }

  public function tutors(){
    $this->view->title ="Techie | Tutors";
    $this->view->courses = $this->model->tutors();
    $this->view->render('index/tutors');
  }

  public function selectedCourse() {

  }

  public function calendar(){
    $this->view->render('index/calendar');
  }
}

 ?>
