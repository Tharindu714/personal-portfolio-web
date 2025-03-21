<?php
require "connection.php";

$title = $_POST["title"];
$price = $_POST["price"];
$desc = $_POST["desc"];
$img = $_POST["img"];


if (empty($title)) {
  echo ("Please Enter Service Title");
} else if (empty($price)) {
  echo ("Please Enter valid price");
} else if (empty($desc)) {
  echo ("Please Enter a little description");
} else if (empty($img)) {
  echo ("Please Enter icon Path");
} else {

  Database::insUpdelete("INSERT INTO `service`
    (`title`,`price`,`description`,`image_icon`)
    VALUES ('" . $title . "' ,'" . $price . "' ,'" . $desc . "','" . $img . "')");

  echo ("Submitted Successfully");
}