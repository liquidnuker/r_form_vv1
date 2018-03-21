<?php 
session_start();

class GrgCaptcha1 {
  // ret boolean
  function verify($captcha) {
    if (strtolower($captcha) == strtolower($_SESSION['phrase'])) {
      return true; 
    } else {
      return false; 
    }
  } 
}

// todo: $builder->testPhrase($_POST['f_captcha'])

?>