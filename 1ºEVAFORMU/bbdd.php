<?php
$server = "localhost";
$user = "id19708729_root";
$pass = "69724d8f@andres@112@A";
$database = "id19708729_diw";

$con = mysqli_connect($server,$user,$pass,$database);
if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
}
 