<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'dbperpus';

$conn = mysqli_connect($host,$user,$pass);
$db = mysqli_select_db($conn,$database);

?>