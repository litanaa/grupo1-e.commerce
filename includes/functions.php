<?php

function redirect ($url){
  return header('location :' . $url);
}

function is_logged(){
  return session_status() === PHP_SESSION_ACTIVE;
}

<<<<<<< HEAD
=======

>>>>>>> f54e20f5baa59746e8eaf7a54706f167d331f092
 ?>
