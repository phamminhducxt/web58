<?php
$mysqli = new mysqli("localhost","root","1234","shopquanao");
$mysqli->set_charset("utf8");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Không kết nối được MYSQLi" . $mysqli -> connect_error;
  exit();
}
?>