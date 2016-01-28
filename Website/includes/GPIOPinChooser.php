<?php
include 'includes/querys';
function showGPIOPins($maxLamps, $formReturnPage){

    echo "<form action=\"";
    echo htmlentities($formReturnPage);
    echo "\" method=\"post\">";
    echo " <table>";

    for($lampNr = 1; $lampNr <= $maxLamps; $lampNr++){
        echo "<tr><td>GPIO pins light $lampNr</td></tr>";
        echo "<tr><td>Red</td><td>
                    <select name=\"GPIOPinRed" . $lampNr . "\">
                        <option value=\"2\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 2){echo ("selected");}
                        echo " >Pin 3</option>

                        <option value=\"3\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 3){echo ("selected");}
                        echo " >Pin 5</option>

                         <option value=\"4\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 4){echo ("selected");}
                        echo " >Pin 7</option>

                         <option value=\"14\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 14){echo ("selected");}
                        echo " >Pin 8</option>

                         <option value=\"15\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 15){echo ("selected");}
                        echo " >Pin 10</option>

                         <option value=\"17\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 17){echo ("selected");}
                        echo " >Pin 11</option>

                         <option value=\"18\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 18){echo ("selected");}
                        echo " >Pin 12</option>

                         <option value=\"27\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 27){echo ("selected");}
                        echo " >Pin 13</option>

                         <option value=\"22\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 22){echo ("selected");}
                        echo " >Pin 15</option>

                         <option value=\"23\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 23){echo ("selected");}
                        echo " >Pin 16</option>

                         <option value=\"24\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 24){echo ("selected");}
                        echo " >Pin 18</option>

                         <option value=\"10\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 10){echo ("selected");}
                        echo " >Pin 19</option>

                         <option value=\"9\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 9){echo ("selected");}
                        echo " >Pin 21</option>

                         <option value=\"25\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 25){echo ("selected");}
                        echo " >Pin 22</option>

                         <option value=\"11\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 11){echo ("selected");}
                        echo " >Pin 23</option>

                         <option value=\"8\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 8){echo ("selected");}
                        echo " >Pin 24</option>

                         <option value=\"7\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 7){echo ("selected");}
                        echo " >Pin 26</option>

                         <option value=\"5\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 5){echo ("selected");}
                        echo " >Pin 29</option>

                         <option value=\"6\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 6){echo ("selected");}
                        echo " >Pin 31</option>

                         <option value=\"12\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 12){echo ("selected");}
                        echo " >Pin 32</option>

                         <option value=\"13\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 13){echo ("selected");}
                        echo " >Pin 33</option>

                         <option value=\"19\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 19){echo ("selected");}
                        echo " >Pin 35</option>

                         <option value=\"16\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 16){echo ("selected");}
                        echo " >Pin 36</option>

                         <option value=\"26\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 26){echo ("selected");}
                        echo " >Pin 37</option>

                         <option value=\"20\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 20){echo ("selected");}
                        echo " >Pin 38</option>

                         <option value=\"21\" ";
                        if(getSelected("GPIOPinRed", $lampNr, $_SESSION['user_id']) == 21){echo ("selected");}
                        echo " >Pin 40</option>
                    </select>
                </td></tr>";

        echo "<tr><td>Green</td><td>
                    <select name=\"GPIOPinGreen" . $lampNr . "\">
                        <option value=\"2\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 2){echo ("selected");}
        echo " >Pin 3</option>

                        <option value=\"3\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 3){echo ("selected");}
        echo " >Pin 5</option>

                         <option value=\"4\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 4){echo ("selected");}
        echo " >Pin 7</option>

                         <option value=\"14\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 14){echo ("selected");}
        echo " >Pin 8</option>

                         <option value=\"15\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 15){echo ("selected");}
        echo " >Pin 10</option>

                         <option value=\"17\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 17){echo ("selected");}
        echo " >Pin 11</option>

                         <option value=\"18\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 18){echo ("selected");}
        echo " >Pin 12</option>

                         <option value=\"27\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 27){echo ("selected");}
        echo " >Pin 13</option>

                         <option value=\"22\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 22){echo ("selected");}
        echo " >Pin 15</option>

                         <option value=\"23\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 23){echo ("selected");}
        echo " >Pin 16</option>

                         <option value=\"24\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 24){echo ("selected");}
        echo " >Pin 18</option>

                         <option value=\"10\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 10){echo ("selected");}
        echo " >Pin 19</option>

                         <option value=\"9\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 9){echo ("selected");}
        echo " >Pin 21</option>

                         <option value=\"25\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 25){echo ("selected");}
        echo " >Pin 22</option>

                         <option value=\"11\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 11){echo ("selected");}
        echo " >Pin 23</option>

                         <option value=\"8\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 8){echo ("selected");}
        echo " >Pin 24</option>

                         <option value=\"7\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 7){echo ("selected");}
        echo " >Pin 26</option>

                         <option value=\"5\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 5){echo ("selected");}
        echo " >Pin 29</option>

                         <option value=\"6\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 6){echo ("selected");}
        echo " >Pin 31</option>

                         <option value=\"12\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 12){echo ("selected");}
        echo " >Pin 32</option>

                         <option value=\"13\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 13){echo ("selected");}
        echo " >Pin 33</option>

                         <option value=\"19\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 19){echo ("selected");}
        echo " >Pin 35</option>

                         <option value=\"16\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 16){echo ("selected");}
        echo " >Pin 36</option>

                         <option value=\"26\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 26){echo ("selected");}
        echo " >Pin 37</option>

                         <option value=\"20\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 20){echo ("selected");}
        echo " >Pin 38</option>

                         <option value=\"21\" ";
        if(getSelected("GPIOPinGreen", $lampNr, $_SESSION['user_id']) == 21){echo ("selected");}
        echo " >Pin 40</option>
                    </select>
                </td></tr>";

        echo "<tr><td>Blue</td><td>
                    <select name=\"GPIOPinBlue" . $lampNr . "\">
                        <option value=\"2\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 2){echo ("selected");}
        echo " >Pin 3</option>

                        <option value=\"3\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 3){echo ("selected");}
        echo " >Pin 5</option>

                         <option value=\"4\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 4){echo ("selected");}
        echo " >Pin 7</option>

                         <option value=\"14\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 14){echo ("selected");}
        echo " >Pin 8</option>

                         <option value=\"15\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 15){echo ("selected");}
        echo " >Pin 10</option>

                         <option value=\"17\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 17){echo ("selected");}
        echo " >Pin 11</option>

                         <option value=\"18\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 18){echo ("selected");}
        echo " >Pin 12</option>

                         <option value=\"27\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 27){echo ("selected");}
        echo " >Pin 13</option>

                         <option value=\"22\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 22){echo ("selected");}
        echo " >Pin 15</option>

                         <option value=\"23\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 23){echo ("selected");}
        echo " >Pin 16</option>

                         <option value=\"24\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 24){echo ("selected");}
        echo " >Pin 18</option>

                         <option value=\"10\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 10){echo ("selected");}
        echo " >Pin 19</option>

                         <option value=\"9\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 9){echo ("selected");}
        echo " >Pin 21</option>

                         <option value=\"25\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 25){echo ("selected");}
        echo " >Pin 22</option>

                         <option value=\"11\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 11){echo ("selected");}
        echo " >Pin 23</option>

                         <option value=\"8\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 8){echo ("selected");}
        echo " >Pin 24</option>

                         <option value=\"7\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 7){echo ("selected");}
        echo " >Pin 26</option>

                         <option value=\"5\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 5){echo ("selected");}
        echo " >Pin 29</option>

                         <option value=\"6\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 6){echo ("selected");}
        echo " >Pin 31</option>

                         <option value=\"12\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 12){echo ("selected");}
        echo " >Pin 32</option>

                         <option value=\"13\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 13){echo ("selected");}
        echo " >Pin 33</option>

                         <option value=\"19\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 19){echo ("selected");}
        echo " >Pin 35</option>

                         <option value=\"16\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 16){echo ("selected");}
        echo " >Pin 36</option>

                         <option value=\"26\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 26){echo ("selected");}
        echo " >Pin 37</option>

                         <option value=\"20\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 20){echo ("selected");}
        echo " >Pin 38</option>

                         <option value=\"21\" ";
        if(getSelected("GPIOPinBlue", $lampNr, $_SESSION['user_id']) == 21){echo ("selected");}
        echo " >Pin 40</option>
                    </select>
                </td></tr><tr><tr><tr><tr><tr><tr></tr></tr></tr></tr></tr></tr>";
    }
    echo "<tr>
            <td><input type=\"submit\" value=\"Save\" name=\"submit\"> </td>
        </tr>";
    echo "</table></form>";

}