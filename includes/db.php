<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "loginsystem";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("conenction failed: ". mysqli_connect_error());
}