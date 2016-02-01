<?php
include_once 'db_connect.php';

function getPWM($colour, $userId, $lightNumber)
{
    global $mysqli;
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "SELECT $colour FROM Settings_per_light WHERE UserID = \"$userId\" AND LightNumber = \"$lightNumber\"";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $SQLResult = $row["$colour"];
        }
    } else {
        $SQLResult = -1;
    }
    return $SQLResult;
}

function updatePWM($id, $lightNr, $PWMRed, $PWMGreen, $PWMBlue){
    global $mysqli;
    if($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "INSERT INTO Settings_per_light (UserID, LightNumber, PWMRed, PWMGreen, PWMBlue) VALUES
            (\"$id\", \"$lightNr\", \"$PWMRed\", \"$PWMGreen\", \"$PWMBlue\")
            ON DUPLICATE KEY
            UPDATE PWMRed = \"$PWMRed\", PWMGreen = \"$PWMGreen\", PWMBlue = \"$PWMBlue\"
            ";
    if ($mysqli->query($sql) === TRUE) {
    } else {
        echo "Update failed.";
    }
}

function updateGPIOPin($id, $lightNr, $PinRed, $PinGreen, $PinBlue)
{
    global $mysqli;
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "INSERT INTO Settings_per_light (UserID, LightNumber, GPIOPinRed, GPIOPinGreen, GPIOPinBlue) VALUES
            (\"$id\", \"$lightNr\", \"$PinRed\", \"$PinGreen\", \"$PinBlue\")
            ON DUPLICATE KEY
            UPDATE GPIOPinRed = \"$PinRed\", GPIOPinGreen = \"$PinGreen\", GPIOPinBlue = \"$PinBlue\"
            ";
    if ($mysqli->query($sql) === TRUE) {
    } else {
    }
}

function getMaxLampsById($id)
{
    global $mysqli;
    $SQLResult = 0;
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "SELECT maxNumberOfLights FROM Lights_per_user WHERE UserID = \"$id\"";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $SQLResult = $row['maxNumberOfLights'];
        }
    } else {
        return 0;
    }
    return $SQLResult;
}

function setMaxLamps($maxLamps, $id)
{
    global $mysqli;
    if ($mysqli->connect_error) {
        die("Connection Failed: " . $mysqli->connect_error);
    }
    $sql = "INSERT INTO Lights_per_user (UserID, maxNumberOfLights) VALUES (\"$id\", \"$maxLamps\")
            ON DUPLICATE KEY
            UPDATE maxNumberOfLights = \"$maxLamps\"
            ";
    if ($mysqli->query($sql) === TRUE) {
    } else {
    }
}

function getSelected($colour, $lampNr, $id){
    global $mysqli;
    $SQLResult = null;
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "SELECT $colour FROM Settings_per_light WHERE UserID = \"$id\" and LightNumber = \"$lampNr\"";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $SQLResult = $row["$colour"];
        }
    } else {
        return null;
    }
    return $SQLResult;
}

function deleteUnnecessaryRows($userID, $setMaxLamps){
    global $mysqli;
    if($mysqli->connect_error){
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = " SELECT COUNT(LightNumber) AS maxLights FROM Settings_per_light WHERE UserID = \"$userID\"";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $maxLampsInDatabase = $row["maxLights"];
        }
    } else {
        return null;
    }
    if($maxLampsInDatabase > $setMaxLamps) {
        for ($maxLampsInDatabase; $maxLampsInDatabase > $setMaxLamps; $maxLampsInDatabase--) {
            $sql = "DELETE FROM Settings_per_light WHERE UserID = \"$userID\" AND LightNumber = \"$maxLampsInDatabase\"";
//            DELETE FROM `Settings_per_light` WHERE UserID = 2 AND LightNumber = 7
            $mysqli->query($sql);
            echo "$maxLampsInDatabase";
        }
    }
}