<?php
 header("Access-Control-Allow-Origin: *");
 $url = "http://ajj3.herokuapp.com/index.html";
$statusCode = 301;
header('Location: ' . $url, true, $statusCode);
?>