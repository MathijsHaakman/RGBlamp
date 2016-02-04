<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/check_login.php';
include_once 'includes/queries.php';

sec_session_start();

$maxLights = getMaxLampsById($_SESSION['user_id']);

if ( isset($_POST['AnalogValueRed1'])) {
    for($p = 1; $p <= $maxLights; $p++){
        updatePWM($_SESSION['user_id'], $p, $_POST['AnalogValueRed'.$p], $_POST['AnalogValueGreen'.$p], $_POST['AnalogValueBlue'.$p]);
    }
}

$PWMArray = array();
for($iteration = 1; $iteration <= $maxLights; $iteration++){
    array_push($PWMArray, array(getPWM("PWMRed", $_SESSION['user_id'], $iteration),getPWM("PWMGreen", $_SESSION['user_id'], $iteration),getPWM("PWMBlue", $_SESSION['user_id'], $iteration)));
}

//shell_exec("pigs p $GPIOPinRed $analogRed p $GPIOPinGreen $analogGreen p $GPIOPinBlue $analogBlue");
?>
<!DOCTYPE html>
<html>
<head>
    <title>RGB light</title>

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
        showPWMSetter($maxLights, $_SERVER['PHP_SELF'], $PWMArray);
    ?>
</div>
</body>
</html>
