<?php
require "connection.php";

$position = $_POST["position"];
$year = $_POST["y"];
$institute = $_POST["com"];

if (empty($position)) {
  echo ("Please Enter position type");
} else if (empty($year)) {
  echo ("Please Enter valid period");
} else if (empty($institute)) {
  echo ("Please Enter Your company or institution");
} else {

  Database::insUpdelete("INSERT INTO `exp`
    (`position`,`year`,`company_name`)
    VALUES ('" . $position . "' ,'" . $year . "' ,'" . $institute . "')");

  echo ("Submitted Successfully");
}