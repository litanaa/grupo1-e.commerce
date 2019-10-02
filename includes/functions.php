<?php

function redirect ($url){
  return header('location :' . $url);
}

function is_logged(){
  return session_status() === PHP_SESSION_ACTIVE;
}

 ?>
