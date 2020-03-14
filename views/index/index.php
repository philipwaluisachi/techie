<?php
// echo "index view";
 ?>
<section>
  <div class="container">
    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="3000">
          <img src="<?=url;?>ui/images/computercenter.jeonghyunhwang-3.jpg" width="500px" height="500px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Techie Nairobi</h5>
            <p>Our learning center in Nairobi.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="<?=url;?>ui/images/GettyImages-student.jpg" width="500px" height="500px" class="d-block w-100" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Techie Kitale</h5>
            <p>Our learning center in Kitale.</p>
          </div>
        </div>
        <div class="carousel-item" data-interval="3000">
          <img src="<?=url;?>ui/images/news_theundefeated.com_blackteachersmatters-690x393.jpg" width="500px" height="500px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Techie Kisumu</h5>
            <p>Our learning center in Kisumu.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  </div>

</section>

<section>
  <h2>Trending Courses</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="<?=url;?>ui/images/computercenter.jeonghyunhwang-3.jpg" width="500px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Netwoking ENSP</h5>
            <p class="card-text">ENSP is a course on configuring switches, routers etc..</p>
            <a href="<?=url;?>index/course?id=1" class="btn btn-primary">Open course</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="<?=url;?>views\index\images\download.png" width="500px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Node js</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?=url;?>index/course?id=2" class="btn btn-primary">Open course</a>
          </div>
        </div>

      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="<?=url;?>views\index\images\1200px-ISO_C++_Logo.svg.png" width="500px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">C++</h5>
            <p class="card-text">C++ is an object oriented programming language.</p>
            <a href="<?=url;?>index/course?id=3" class="btn btn-primary">Open course</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <h2>Latest Courses</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="<?=url;?>ui/images/computercenter.jeonghyunhwang-3.jpg" width="500px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Netwoking ENSP</h5>
            <p class="card-text">ENSP is a course on configuring switches, routers etc..</p>
            <a href="<?=url;?>index/course?id=1" class="btn btn-primary">Open course</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="<?=url;?>views\index\images\download.png" width="500px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Node js</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?=url;?>index/course?id=2" class="btn btn-primary">Open course</a>
          </div>
        </div>

      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="<?=url;?>views\index\images\1200px-ISO_C++_Logo.svg.png" width="500px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">C++</h5>
            <p class="card-text">C++ is an object oriented programming language.</p>
            <a href="<?=url;?>index/course?id=3" class="btn btn-primary">Open course</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
