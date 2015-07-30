<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/check_login.php';

sec_session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="css/login.css"/>
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <title>Login Pagina</title>
    </head>
    <body>
    <div id="top-bar">
        <div id="top-bar-content">
            <? include('includes/top_bar.php'); ?>
        </div>
    </div>
    <div id="content">
    Dit is de indexpagina!<br>
        </div>
    </body>
</html>
