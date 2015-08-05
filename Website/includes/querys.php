<?php
include_once 'db_connect.php';

function getValueById($id){
    global $mysqli;
    if($mysqli->connect_error){
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "SELECT value FROM LightSettings WHERE id=\"$id\"";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $SQLResult =  $row["value"];
        }
    } else {
        echo "0 results";
    }
    return $SQLResult;
}

function updateValueById($id, $value){
    global $mysqli;
    if($mysqli->connect_error){
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = "UPDATE LightSettings SET value = \"$value\" WHERE id=\"$id\"";
    if ($mysqli->query($sql) === TRUE) {
    } else {
    }
}
