<?php
/*
This is were the functions 
go for the framework
*/

function get_url(){
  $actualLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $pos = strpos($actualLink, "/index.php");
  if($pos > 0){
    $relLink = substr($actualLink, $pos + strlen("/index.php"));
    if($relLink !== ""){
      $relLink = substr($relLink, 1);
      $pos = strpos($relLink, "/");
      if($pos == strlen($relLink)-1){
        $relLink = substr($relLink, 0, $pos);
      }
    }
    if($relLink == ""){
      $relLink = "home";
    }
  }else{
    $relLink = "home";
  }
  return $relLink;
}

?>
