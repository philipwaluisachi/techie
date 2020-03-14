<?php
echo "course view";

if (isset($_GET['id'])) {
  $courseId = $_GET['id'];
  if ($courseId == 1) { ?>
    <span class="border border-dark">
      <div class="container">
        <div class="header">

          <strong>Netwoking ENSP</strong>
            </br></hr>
        </div>
        <div class="embed-responsive embed-responsive-16by9 " border='solid 3px'>
          <iframe class="embed-responsive-item" src="<?=url;?>views\index\videos\network\1. Welcome.mp4" allowfullscreen></iframe>
        </div>
      </div>
    </span>
  <?php return false;} elseif ($courseId == 2) { ?>

    <span class="border border-dark">
      <div class="container">
        <div class="header">
          <strong> Node JS</strong>
            </br>
          </hr>
        </div>
        <div class="embed-responsive embed-responsive-16by9" border='solid 3px'>
          <iframe class="embed-responsive-item" src="<?=url;?>views\index\videos\react\Building API Backend - Install mongoose, Express, cors, bodyParser libraries and.mp4" allowfullscreen></iframe>
        </div>
      </div>
    </span>
<?php  } elseif ($courseId == 3) { ?>
  <span class="border border-dark">
    <div class="container">
      <div class="header">
        <strong>C++</strong>
          </br>
        </hr>
      </div>
      <div class="embed-responsive embed-responsive-16by9" border='solid 3px'>
        <iframe class="embed-responsive-item" src="<?=url;?>views\index\videos\cpp\1. Code Editor and Introduction.mp4" allowfullscreen></iframe>
      </div>
    </div>
  </span>
<?php  }
}


?>
