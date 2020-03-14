<?php
class authentication_model extends Model {

  function __construct() {
    parent::__construct();
  }

  public function signup(){
    if (isset($_GET['action']) == "signup") {

      $email = $_POST['email'];
      $password = $_POST['password'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $confirmPassword = $_POST['confirmpassword'];
      $chechbox = $_POST['checkbox'];

      $originalmail = $email;

      if (!empty($email ) && !empty($password) && !empty($confirmPassword) && !empty($lastName) && !empty($firstName)) {
        if ($chechbox == 1 && $password == $confirmPassword) {
            // print_r($_POST); exit;
            // "philipwaluisachi@protonmail.com"
            // 0=>philipwaluisachi
            // 1=>protonmail.com

            // 0=>protonmail
            // 1=>com
                  $email = explode('@', $email);
                  $tail = $email[1];
                  $maildomain = explode('.', $tail);
                  $hostingco = $maildomain[0]; //gmail
                  $domain = $maildomain[1]; //co, ke, com,
                  $company = array("gmail" ,"protonmail", "yahoo","tutanota");
                  $dom = array('com', 'ke', 'co', 'net', 'edu','uk','org', 'io');

                  if (in_array($hostingco , $company)  && in_array($domain , $dom)) {
                    $password = Encryption::password($password);

                    $sql = "SELECT * FROM `accounts` WHERE `email` = :email AND `passwords` = :password";
                    $query = $this->database->prepare($sql);
                    $query->bindParam(':email', $originalmail);
                    $query->bindParam(':password', $password);
                    $query->execute();
                    $data = $query->fetch(PDO::FETCH_ASSOC);
                        if (empty($data)) {
                          $sql = "INSERT INTO `accounts`( `firstName`, `lastName`, `email`, `passwords`) VALUES (:firstName , :lastName , :email , :password)";
                          $query = $this->database->prepare($sql);
                          $query->bindParam(':firstName', $firstName);
                          $query->bindParam(':lastName', $lastName);
                          $query->bindParam(':email', $originalmail);
                          $query->bindParam(':password', $password);
                          $query->execute();
                            if ($query) {
                              $sql = "SELECT `id`, `firstName`, `lastName`, `email`, `passwords` FROM `accounts` WHERE `email` = :email AND `passwords` = :password";
                              $query = $this->database->prepare($sql);
                              $query->bindParam(':email', $originalmail);
                              $query->bindParam(':password', $password);
                              $query->execute();
                              $data = $query->fetch(PDO::FETCH_ASSOC);
                              // print_r($data); exit;
                              if (!empty($data)) {
                                header("Location:".url."authentication/login?res=Registered");
                              }
                            } else {
                              header("Location:".url."index?res= Error occured during registration");
                            }

                        } else {
                          header("Location:".url."authentication/login?res= E-mail address already registered");
                        }

                  } else {
                    header("Location:".url."index?res=Use a legit email address");
                  }
        } else {
          header("Location:".url."index?res=Password didn't match");
        }

      } else {
        header("Location:".url."index?res=Fill in all inputs");
      }

    } else {
      header("Location:".url."index?res=Link not legit");
    }

  }

  public function login(){
    if (isset($_POST['action']) == 'login') {
      // print_r($_POST); exit;
      $email = $_POST['email'];
      $password = $_POST['password'];
      $originalmail = $email;
// echo $this->legit->verify($email); exit;
      if ($this->legit->verify($email)) {
        $password = Encryption::password($password);

        $sql = "SELECT `id`, `firstName`, `lastName`, `email`, `passwords` FROM `accounts` WHERE `email` = :email AND `passwords` = :password";
        $query = $this->database->prepare($sql);
        $query->bindParam(':email', $originalmail);
        $query->bindParam(':password', $password);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($data); exit;

        if (!empty($data)) {
          $email = $data['email'];
          Session::start();
          Session::set('account', $email);
          $check = Session::check('account');
          // print_r($_SESSION);
          // echo $check;exit;
          if ($check) {
            header("Location:".url."index?res=Login successful");
          }
        } else {
          header("Location:".url."authentication/signup?res=E-mail address not registered");
        }

      } else {
        header("Location:".url."index?res=Use a legit email address");
      }
    } else {
      header("Location:".url."index?res=Link not legit ");
    }
  }

  public function logout(){
    Session::start();
    Session::destroy('account');
    $check = Session::check('account');
    if ($check == 0) {
      header("Location:".url."index?res=Logout successful");
    } 
  }
}

 ?>
