<?php

$mysqli = false;
function connectDB () {
    global $mysqli;
    $mysqli = new mysqli ("localhost", "root", "", "test1base");
    $mysqli->query("SET NAMES utf8");
}

function closeDB () {
    global $mysqli;
    $mysqli->close ();
}


 function getNews($limit){
  global $mysqli;
  connectDB();
  $result = $mysqli->query("Select * FROM `news` ORDER BY `id` DESC LIMIT $limit");
  closeDB();
  return resultToArray($result);
 }

 function resultToArray($result){ 
  $array = array();
  while(($row = $result->fetch_assoc()) != false)
   $array[] = $row;
  return $array;
   }

?>