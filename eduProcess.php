<?php
require "connection.php";

$qualification = $_POST["qu"];
$year = $_POST["year"];
$institute = $_POST["ins"];

if (empty($qualification)) {
  echo ("Please Enter Qualification type");
} else if (empty($year)) {
  echo ("Please Enter valid period");
} else if (empty($institute)) {
  echo ("Please Enter Your school or institution");
} else {

  Database::insUpdelete("INSERT INTO `edu`

    (`qulification`,`year`,`institute`)
    VALUES ('" . $qualification . "' ,'" . $year . "' ,'" . $institute . "')");

  echo ("Submitted Successfully");
}