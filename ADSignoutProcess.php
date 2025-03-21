<?php
session_start();

if(isset($_SESSION["Aduser"])){

  $_SESSION["Aduser"] = null;
  session_destroy();

  echo("success");
}

?>