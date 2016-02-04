<?php
function showPWMSetter($maxLights, $formReturnPage, $PWMArray){
    echo "<form action=\"$formReturnPage\" method=\"post\"><table><tr><td>Analog values</td></tr>";
    for($x = 1; $x <= $maxLights; $x++){
        echo "<tr><td>Red</td><td>0<input type='range' min='0' max='255' step='1' id='AnalogValueRed" . $x ."' name='AnalogValueRed" . $x . "' value='" . $PWMArray[$x-1][0] . "' oninput='amountRed" . $x . ".value=AnalogValueRed" . $x . ".value'>255 </td></tr>";
        echo "<tr><td></td><td align='center'><output name='amountRed" . $x . "' id='amountRed" . $x . "' for='AnalogValueRed" . $x . "'>" . $PWMArray[$x-1][0] . "</output></td></tr><tr></tr>";

        echo "<tr><td>Green</td><td>0<input type='range' min='0' max='255' step='1' id='AnalogValueGreen" . $x ."' name='AnalogValueGreen" . $x . "' value='" . $PWMArray[$x-1][1] . "' oninput='amountGreen" . $x . ".value=AnalogValueGreen" . $x . ".value'>255 </td></tr>";
        echo "<tr><td></td><td align='center'><output name='amountGreen" . $x . "' id='amountGreen" . $x . "' for='AnalogValueGreen" . $x . "'>" . $PWMArray[$x-1][1] . "</output></td></tr><tr></tr>";

        echo "<tr><td>Blue</td><td>0<input type='range' min='0' max='255' step='1' id='AnalogValueBlue" . $x ."' name='AnalogValueBlue" . $x . "' value='" . $PWMArray[$x-1][2] . "' oninput='amountBlue" . $x . ".value=AnalogValueBlue" . $x . ".value'>255 </td></tr>";
        echo "<tr><td></td><td align='center'><output name='amountBlue" . $x . "' id='amountBlue" . $x . "' for='AnalogValueBlue" . $x . "'>" . $PWMArray[$x-1][2] . "</output></td></tr><tr></tr>";
    }
    echo "<tr><td><input type='submit' value='Save' name='submit'></td></tr>";
    echo "</table></form>";
}