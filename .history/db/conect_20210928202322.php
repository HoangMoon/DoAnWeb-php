<?php
$con = mysqli_connect("localhost","bando_dienmay","my_password","my_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>