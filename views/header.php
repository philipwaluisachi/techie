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

Session::start();
$loggedin = Session::check('account');
// echo $loggedin;
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
  <a class="navbar-brand" href="<?=url;?>">Techie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <?php if ($loggedin == 1): ?>
        <li class="nav-item <?php if ($url[0] == 'index'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/courses'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/courses">Courses</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/course'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/course">Course</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/tutors'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/tutors">Tutors</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/calendar'){echo $active;} ?>">
          <a class="nav-link" href="<?=url?>index/calendar">calendar</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/pricing'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/pricing">Pricing</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'account/index'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>account/index">My Account</a>
        </li>
      <?php else: ?>
        <li class="nav-item <?php if ($url[0] == 'index'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/courses'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/courses">Courses</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/course'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/course">Course</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/tutors'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/tutors">Tutors</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/calendar'){echo $active;} ?>">
          <a class="nav-link" href="<?=url?>index/calendar">calendar</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'index/pricing'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>index/pricing">Pricing</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'account/index'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>account/index">My Account</a>
        </li>
      <?php endif; ?>
    </ul>
    <ul class="navbar-nav navbar-brand">
      <?php if ($loggedin == 1): ?>
        <li class="nav-item <?php if ($url[0] == 'authentication/login'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>authentication/logout">Logout</a>
        </li>
      <?php else: ?>
        <li class="nav-item <?php if ($url[0] == 'authentication/login'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>authentication/login">Login</a>
        </li>
        <li class="nav-item <?php if ($url[0] == 'authentication/signup'){echo $active;} ?>">
          <a class="nav-link" href="<?=url;?>authentication/signup">Signup</a>
        </li>
      <?php endif; ?>

  </ul>
  </div>
</nav>
<!-- //Collapsed -->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<div class="container-fluid">


  <?php
    if (isset($_GET['res'])) {
      $res = $_GET['res'];?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hey Watch Out!</strong> <?=$res;?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
  <?php  }   ?>
