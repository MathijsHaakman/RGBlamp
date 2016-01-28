<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/check_login.php';
include_once 'includes/querys.php';

sec_session_start();
//if ( isset($_POST['AnalogValueRed']) || isset($_POST['AnalogValueGreen']) || isset($_POST['AnalogValueBlue']) ) {
//    updateValueById("AnalogValueRed", $_POST['AnalogValueRed']);
//    updateValueById("AnalogValueGreen", $_POST['AnalogValueGreen']);
//    updateValueById("AnalogValueBlue", $_POST['AnalogValueBlue']);
//}

$maxLamps = getMaxLampsById($_SESSION['user_id']);

$analogRed = getPWM("PWMRed", $_SESSION['user_id'], 1);
$analogGreen = getPWM("PWMGreen", $_SESSION['user_id'], 1);
$analogBlue = getPWM("PWMBlue", $_SESSION['user_id'], 1);



//shell_exec("pigs p $GPIOPinRed $analogRed p $GPIOPinGreen $analogGreen p $GPIOPinBlue $analogBlue");
?>
<!DOCTYPE html>
<html>
<head>
    <title>RGB lamp</title>

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/onoffswitch.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="top-bar">
    <div id="top-bar-content">
        <? include('includes/top_bar.php'); ?>
    </div>
</div>

<div id="content">
<!--    <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" <?php if($analogBlue != 0 && $analogGreen != 0 && $analogRed != 0){ echo "checked";}?>>
        <label class="onoffswitch-label" for="myonoffswitch">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div> -->
    <?php
    include 'includes/AnalogValueChooser.php';
    ?>
</div>
</body>
</html>
