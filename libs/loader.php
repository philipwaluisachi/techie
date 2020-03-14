<?php

class Loader {

  function __construct(){
    if (isset($_GET['url'])) {
        $domain = $_GET['url'];
    } else {
      $domain = null;
    }

    $domain = rtrim($domain, '/');
    $domain = explode( '/', $domain);
    // print_r($domain);

      if (empty($domain[0])) {
        require ('controllers/index.php');
        $controller = new index();
        $controller->loadModel("index");
        $controller->index();
        return false;
      }

      $path = 'controllers/'.$domain[0].'.php';
        if (file_exists($path)) {
          require ($path);
          $controller = new $domain[0];
          $controller->loadModel($domain[0]);

            if (!empty($domain[2])) {
              if (method_exists($controller , $domain[2])) {
                  $controller->{$domain[1]}($domain[2]);
              } else {
                $this->errors();
              }

            }

            if (!empty($domain[1])) {
                if (method_exists($controller , $domain[1])) {
                    $controller->{$domain[1]}();
                } else {
                    $this->errors();
                }

            } else {
              $controller->index();
            }
        } else {
          $this->errors();
        }

  }

  function errors(){
    require ('controllers/errors.php');
    $controller = new errors();
    $controller->index();
    return false;
  }
}

?>
