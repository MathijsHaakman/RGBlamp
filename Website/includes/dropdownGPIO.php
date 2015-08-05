<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table>
        <tr>
            <td>GPIO pins</td>
        </tr>
        <tr>
            <td>Red</td>
            <td><select name="GPIOPinRed" >
                    <option <?php if($selectedRed == '8'){echo("selected");}?> value="8">Pin 3</option>
                    <option <?php if($selectedRed == '9'){echo("selected");}?> value="9">Pin 5</option>
                    <option <?php if($selectedRed == '7'){echo("selected");}?> value="7">Pin 7</option>
                    <option <?php if($selectedRed == '15'){echo("selected");}?> value="15">Pin 8</option>
                    <option <?php if($selectedRed == '16'){echo("selected");}?> value="16">Pin 10</option>
                    <option <?php if($selectedRed == '0'){echo("selected");}?> value="0">Pin 11</option>
                    <option <?php if($selectedRed == '1'){echo("selected");}?> value="1">Pin 12</option>
                    <option <?php if($selectedRed == '2'){echo("selected");}?> value="2">Pin 13</option>
                    <option <?php if($selectedRed == '3'){echo("selected");}?> value="3">Pin 15</option>
                    <option <?php if($selectedRed == '4'){echo("selected");}?> value="4">Pin 16</option>
                    <option <?php if($selectedRed == '5'){echo("selected");}?> value="5">Pin 18</option>
                    <option <?php if($selectedRed == '12'){echo("selected");}?> value="12">Pin 19</option>
                    <option <?php if($selectedRed == '13'){echo("selected");}?> value="13">Pin 21</option>
                    <option <?php if($selectedRed == '6'){echo("selected");}?> value="6">Pin 22</option>
                    <option <?php if($selectedRed == '14'){echo("selected");}?> value="14">Pin 23</option>
                    <option <?php if($selectedRed == '10'){echo("selected");}?> value="10">Pin 24</option>
                    <option <?php if($selectedRed == '11'){echo("selected");}?> value="11">Pin 26</option>
                    <option <?php if($selectedRed == '21'){echo("selected");}?> value="21">Pin 29</option>
                    <option <?php if($selectedRed == '22'){echo("selected");}?> value="22">Pin 31</option>
                    <option <?php if($selectedRed == '26'){echo("selected");}?> value="26">Pin 32</option>
                    <option <?php if($selectedRed == '23'){echo("selected");}?> value="23">Pin 33</option>
                    <option <?php if($selectedRed == '24'){echo("selected");}?> value="24">Pin 35</option>
                    <option <?php if($selectedRed == '27'){echo("selected");}?> value="27">Pin 36</option>
                    <option <?php if($selectedRed == '25'){echo("selected");}?> value="25">Pin 37</option>
                    <option <?php if($selectedRed == '28'){echo("selected");}?> value="28">Pin 38</option>
                    <option <?php if($selectedRed == '29'){echo("selected");}?> value="29">Pin 40</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Green</td>
            <td><select name="GPIOPinGreen" >
                    <option <?php if($selectedGreen == '8'){echo("selected");}?> value="8">Pin 3</option>
                    <option <?php if($selectedGreen == '9'){echo("selected");}?> value="9">Pin 5</option>
                    <option <?php if($selectedGreen == '7'){echo("selected");}?> value="7">Pin 7</option>
                    <option <?php if($selectedGreen == '15'){echo("selected");}?> value="15">Pin 8</option>
                    <option <?php if($selectedGreen == '16'){echo("selected");}?> value="16">Pin 10</option>
                    <option <?php if($selectedGreen == '0'){echo("selected");}?> value="0">Pin 11</option>
                    <option <?php if($selectedGreen == '1'){echo("selected");}?> value="1">Pin 12</option>
                    <option <?php if($selectedGreen == '2'){echo("selected");}?> value="2">Pin 13</option>
                    <option <?php if($selectedGreen == '3'){echo("selected");}?> value="3">Pin 15</option>
                    <option <?php if($selectedGreen == '4'){echo("selected");}?> value="4">Pin 16</option>
                    <option <?php if($selectedGreen == '5'){echo("selected");}?> value="5">Pin 18</option>
                    <option <?php if($selectedGreen == '12'){echo("selected");}?> value="12">Pin 19</option>
                    <option <?php if($selectedGreen == '13'){echo("selected");}?> value="13">Pin 21</option>
                    <option <?php if($selectedGreen == '6'){echo("selected");}?> value="6">Pin 22</option>
                    <option <?php if($selectedGreen == '14'){echo("selected");}?> value="14">Pin 23</option>
                    <option <?php if($selectedGreen == '10'){echo("selected");}?> value="10">Pin 24</option>
                    <option <?php if($selectedGreen == '11'){echo("selected");}?> value="11">Pin 26</option>
                    <option <?php if($selectedGreen == '21'){echo("selected");}?> value="21">Pin 29</option>
                    <option <?php if($selectedGreen == '22'){echo("selected");}?> value="22">Pin 31</option>
                    <option <?php if($selectedGreen == '26'){echo("selected");}?> value="26">Pin 32</option>
                    <option <?php if($selectedGreen == '23'){echo("selected");}?> value="23">Pin 33</option>
                    <option <?php if($selectedGreen == '24'){echo("selected");}?> value="24">Pin 35</option>
                    <option <?php if($selectedGreen == '27'){echo("selected");}?> value="27">Pin 36</option>
                    <option <?php if($selectedGreen == '25'){echo("selected");}?> value="25">Pin 37</option>
                    <option <?php if($selectedGreen == '28'){echo("selected");}?> value="28">Pin 38</option>
                    <option <?php if($selectedGreen == '29'){echo("selected");}?> value="29">Pin 40</option>
                </select></td>
        </tr>
        <tr>
            <td>Blue</td>
            <td><select name="GPIOPinBlue" >
                    <option <?php if($selectedBlue == '8'){echo("selected");}?> value="8">Pin 3</option>
                    <option <?php if($selectedBlue == '9'){echo("selected");}?> value="9">Pin 5</option>
                    <option <?php if($selectedBlue == '7'){echo("selected");}?> value="7">Pin 7</option>
                    <option <?php if($selectedBlue == '15'){echo("selected");}?> value="15">Pin 8</option>
                    <option <?php if($selectedBlue == '16'){echo("selected");}?> value="16">Pin 10</option>
                    <option <?php if($selectedBlue == '0'){echo("selected");}?> value="0">Pin 11</option>
                    <option <?php if($selectedBlue == '1'){echo("selected");}?> value="1">Pin 12</option>
                    <option <?php if($selectedBlue == '2'){echo("selected");}?> value="2">Pin 13</option>
                    <option <?php if($selectedBlue == '3'){echo("selected");}?> value="3">Pin 15</option>
                    <option <?php if($selectedBlue == '4'){echo("selected");}?> value="4">Pin 16</option>
                    <option <?php if($selectedBlue == '5'){echo("selected");}?> value="5">Pin 18</option>
                    <option <?php if($selectedBlue == '12'){echo("selected");}?> value="12">Pin 19</option>
                    <option <?php if($selectedBlue == '13'){echo("selected");}?> value="13">Pin 21</option>
                    <option <?php if($selectedBlue == '6'){echo("selected");}?> value="6">Pin 22</option>
                    <option <?php if($selectedBlue == '14'){echo("selected");}?> value="14">Pin 23</option>
                    <option <?php if($selectedBlue == '10'){echo("selected");}?> value="10">Pin 24</option>
                    <option <?php if($selectedBlue == '11'){echo("selected");}?> value="11">Pin 26</option>
                    <option <?php if($selectedBlue == '21'){echo("selected");}?> value="21">Pin 29</option>
                    <option <?php if($selectedBlue == '22'){echo("selected");}?> value="22">Pin 31</option>
                    <option <?php if($selectedBlue == '26'){echo("selected");}?> value="26">Pin 32</option>
                    <option <?php if($selectedBlue == '23'){echo("selected");}?> value="23">Pin 33</option>
                    <option <?php if($selectedBlue == '24'){echo("selected");}?> value="24">Pin 35</option>
                    <option <?php if($selectedBlue == '27'){echo("selected");}?> value="27">Pin 36</option>
                    <option <?php if($selectedBlue == '25'){echo("selected");}?> value="25">Pin 37</option>
                    <option <?php if($selectedBlue == '28'){echo("selected");}?> value="28">Pin 38</option>
                    <option <?php if($selectedBlue == '29'){echo("selected");}?> value="29">Pin 40</option>
                </select></td>
        </tr>
        <tr>
            <td><input type="submit" value="Save" name="submit"> </td>
        </tr>
    </table>
</form>