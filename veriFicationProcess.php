<?php

session_start();
require "connection.php";

if(isset($_GET["v"])){

  $v = $_GET["v"];

  $admin = Database::search("SELECT * FROM `admin` WHERE `verification_code` = '".$v."'");
  $num = $admin -> num_rows;

  if($num == 1){
    $data = $admin -> fetch_assoc();
    $_SESSION["Aduser"] = $data;
    echo("success");

  }else{
    header("location:adminsigning.php");
  }

}else{
  header("location:adminsigning.php");
}

?>