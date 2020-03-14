<?php

class Session {
  private static $_session = false;


public static function start() {
  if (self::$_session == false) {
    session_start();
    self::$_session = true;
  }
}

public static function set($name , $value) {
  if (self::$_session == true) {
    $_SESSION[$name] = $value;
  }
}

public static function get($name ) {
  if (self::$_session == true && isset($_SESSION[$name])) {
    return $_SESSION[$name];
  }
}

public static function check($name ) {
  if (self::$_session == true && isset($_SESSION[$name])) {
    return true;
  } else {
    return false;
  }

}

public static function role($name ) {

}

public static function destroy($name ) {
  if (self::$_session == true && isset($_SESSION[$name])) {
    unset($_SESSION[$name]);
    self::$_session = false;
  }
}

}

 ?>
