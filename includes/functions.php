<?php

function redirect($url){
  return header("location: " . $url);
}

function is_logged(){
  return session_status() === PHP_SESSION_ACTIVE;
}

function upload_file($file, $dir = "uploads"){
  $ext = pathinfo($file["name"], PATHINFO_EXTENSION);

  $name = md5(microtime());

move_uploaded_file($_FILES ["avatar"]["tmp_name"], $dir . "/". $name . "." . $ext);

}

 ?>
