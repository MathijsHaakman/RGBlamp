<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/check_login.php';
include_once 'includes/querys.php';

sec_session_start();



if ( isset($_POST['GPIOPinRed']) || isset($_POST['GPIOPinGreen']) || isset($_POST['GPIOPinBlue']) ) {
    updateValueById("GPIOPinRed", $_POST['GPIOPinRed']);
    updateValueById("GPIOPinGreen", $_POST['GPIOPinGreen']);
    updateValueById("GPIOPinBlue", $_POST['GPIOPinBlue']);
}
$selectedRed = getValueById("GPIOPinRed");
$selectedGreen = getValueById("GPIOPinGreen");
$selectedBlue = getValueById("GPIOPinBlue");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="top-bar">
    <div id="top-bar-content">
        <? include('includes/top_bar.php'); ?>
    </div>
</div>
<div id="content">
    <?php
    include 'includes/dropdownGPIO.php';
    ?>
    Choose the GPIO pins you used via <a href="images/GPIOPins.png">this</a>  scheme.<br>
    Select in the settings above the physical pins you connected your lights to.
</div>
</body>
</html>
