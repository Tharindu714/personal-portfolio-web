<?php
require "connection.php";

$lang = $_POST["lang"];
$percentage = $_POST["percentage"];
$color = $_POST["color"];


if (empty($lang)) {
  echo ("Please Enter the programming language");
} else if (empty($percentage)) {
  echo ("Please Enter valid percentage");
} else if (empty($color)) {
  echo ("Please Enter bootstap colors (Ex: Success, Primary, danger)");
} else {

  Database::insUpdelete("INSERT INTO `skills`(`langauge`,`percentage`,`color`)
  VALUES ('" . $lang . "' ,'" . $percentage . "','" . $color . "')");

  echo ("Submitted Successfully");
}