<?php
 header("Access-Control-Allow-Origin: *");
 $url = "http://austinjujitsu.com/index.html";
$statusCode = 301;
header('Location: ' . $url, true, $statusCode);
?>
