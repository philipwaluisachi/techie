<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
  $url = null;
}

$url = rtrim($url, '/');
// $url = explode( '/', $url);
// print_r($url);
$active = "active";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->title;?></title>
    <link rel="stylesheet" href="<?=url;?>ui/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?=url;?>">Techie | Administrator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($url[0] == 'index'){echo $active;} ?>">
        <a class="nav-link" href="<?=url;?>administrator">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if ($url[0] == 'index/courses'){echo $active;} ?>">
        <a class="nav-link" href="<?=url;?>administrator/createCourses">Create Course</a>
      </li>
      <li class="nav-item <?php if ($url[0] == 'index/courses'){echo $active;} ?>">
        <a class="nav-link" href="<?=url;?>administrator/manageCourses">Manage Courses</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-brand">
    <li class="nav-item <?php if ($url[0] == 'authentication/login'){echo $active;} ?>">
      <a class="nav-link" href="<?=url;?>authentication/logout">Login Out</a>
    </li>
  </ul>
  </div>
</nav>

<div class="container-fluid">


  <?php
    if (isset($_GET['res'])) {
      $res = $_GET['res'];?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
  <?php  }   ?>
