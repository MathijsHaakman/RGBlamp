<?php
//include 'includes/queries';
//include 'queries.php';

//array physical pin - BCM pin
$GPIOBCMPinsArray = array(
                            array("", null),
                            array(3,2),
                            array(5,3),
                            array(7,4),
                            array(8,14),
                            array(10,15),
                            array(11,17),
                            array(12,18),
                            array(13,27),
                            array(15,22),
                            array(16,23),
                            array(18,24),
                            array(19,10),
                            array(21,9),
                            array(22,25),
                            array(23,11),
                            array(24,8),
                            array(26,7),
                            array(29,5),
                            array(31,6),
                            array(32,12),
                            array(33,13),
                            array(35,19),
                            array(36,16),
                            array(37,26),
                            array(38,20),
                            array(40,21)
                    );

function showGPIOPins($maxLights, $formReturnPage){
    global $GPIOBCMPinsArray;
    echo "<form action = \"" . htmlentities($formReturnPage) . "\" method=\"post\"><table><tr><td></td><td>Red</td><td>Green</td><td>Blue</td>";
        for($i = 1; $i <= $maxLights; $i++) {
            echo "<tr><td> Light $i</td><td>";
            echo "<select name=\"GPIOPinRed" . $i . "\">";
            for($x = 0; $x < count($GPIOBCMPinsArray); $x++){
                echo "<option value=\"" . $GPIOBCMPinsArray[$x][1] . "\" ";
                if(getSelected("GPIOPinRed", $i, $_SESSION['user_id']) == $GPIOBCMPinsArray[$x][1]){echo "selected";}
                if($GPIOBCMPinsArray[$x][0] == null){
                    echo "></option>";
                } else{
                    echo ">pin " . $GPIOBCMPinsArray[$x][0] ." </option>";
                }
            }
            echo "</select></td><td>";
            echo "<select name=\"GPIOPinGreen" . $i . "\">";
            for($x = 0; $x < count($GPIOBCMPinsArray); $x++){
                echo "<option value=\"" . $GPIOBCMPinsArray[$x][1] . "\" ";
                if(getSelected("GPIOPinGreen", $i, $_SESSION['user_id']) == $GPIOBCMPinsArray[$x][1]){echo "selected";}
                if($GPIOBCMPinsArray[$x][0] == null){
                    echo "></option>";
                } else{
                    echo ">pin " . $GPIOBCMPinsArray[$x][0] ." </option>";
                }
            }
            echo "</select></td><td>";
            echo "<select name=\"GPIOPinBlue" . $i . "\">";
            for($x = 0; $x < count($GPIOBCMPinsArray); $x++){
                echo "<option value=\"" . $GPIOBCMPinsArray[$x][1] . "\" ";
                if(getSelected("GPIOPinBlue", $i, $_SESSION['user_id']) == $GPIOBCMPinsArray[$x][1]){echo "selected";}
                if($GPIOBCMPinsArray[$x][0] == null){
                    echo "></option>";
                } else{
                    echo ">pin " . $GPIOBCMPinsArray[$x][0] ." </option>";
                }
            }
            echo "</select>";
            echo "<td></tr>";
        }
        echo "<td><input type=\"submit\" value=\"Save\" name=\"submit\"></td></tr></table></form>";
}
