<?php
include_once("includes/db_connect.php");
include_once("includes/functions.php");

sec_session_start();

if(login_check($mysqli) == false){
    header('Location: login.php');
    exit();
}
?>