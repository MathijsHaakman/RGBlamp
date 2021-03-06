<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/check_login.php';
include_once 'includes/queries.php';

sec_session_start();

if(isset($_POST['maxLights'])){
    if($_POST['maxLights'] < getMaxLampsById($_SESSION['user_id'])) {
        deleteLightSettings($_SESSION['user_id'], getMaxLampsById($_SESSION['user_id']), $_POST['maxLights']);
    } else{
        addDefaultLightSettings($_SESSION['user_id'], $_POST['maxLights'], getMaxLampsById($_SESSION['user_id']));
    }
    setMaxLamps($_POST['maxLights'], $_SESSION['user_id']);
}

if(isset($_POST['GPIOPinRed1'])){
    for($i = 1; $i <= getMaxLampsById($_SESSION['user_id']); $i++){
        updateGPIOPin($_SESSION['user_id'], $i, $_POST["GPIOPinRed" . $i], $_POST["GPIOPinGreen" . $i], $_POST["GPIOPinBlue" . $i]);
    }
}
$maxLights = getMaxLampsById($_SESSION['user_id']);

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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <table>
            <tr>
                <td>Aantal lampen: </td>
                <td><input type="number" name="maxLights" min="0" max="8" value="<?php echo $maxLights; ?>" oninput="<?php echo $maxLights;?> = maxLights.value"></td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['maxLamps'];?></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Save" name="submit">
                </td>
            </tr>
        </table>
    </form><p></p>
    <?php
    include 'includes/GPIOPinChooser.php';
    showGPIOPins($maxLights, $_SERVER['PHP_SELF']);
    ?><br><Br>
    Choose the GPIO pins you used via <a href="images/GPIOPins.png">this</a>  scheme.<br>
    Select in the settings above the physical pins you connected your lights to.<br>
</div>
</body>
</html>
