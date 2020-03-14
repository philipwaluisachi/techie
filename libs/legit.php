<?php

class Legit {

  public function verify($email) {
    $email = explode('@', $email);
    if (!empty($email[1])) {
      $tail = $email[1];
      $maildomain = explode('.', $tail);
      $hostingco = $maildomain[0]; //gmail
      $domain = $maildomain[1]; //co, ke, com,
      $company = array('gmail' ,'protonmail', 'yahoo','tutanota');
      $dom = array('com', 'ke', 'co', 'net', 'edu','uk','org', 'io');

      if (in_array($hostingco , array_keys($company)) && in_array($domain , array_keys($dom))) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}

 ?>
