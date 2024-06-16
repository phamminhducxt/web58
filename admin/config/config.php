<?php
$mysqli = new mysqli("localhost","root","1234","shopquanao");
$conn = mysqli_connect("localhost","root","1234","shopquanao");
mysqli_set_charset($conn, 'UTF8');
// Check connection
if ($mysqli -> connect_errno) {
  echo "Không kết nối được MYSQLi" . $mysqli -> connect_error;
  exit();
}

?>
