<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "diw";

  $con = mysqli_connect($server,$user,$pass,$database);
  if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
  }	
