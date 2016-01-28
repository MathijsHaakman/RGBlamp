<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table>
        <tr>
            <td>Analog values</td>
        </tr>
        <tr>
            <td>Red</td>
            <td>0<input type="range"
                        id="AnalogValueRed"
                        name="AnalogValueRed"
                        min="0"
                        max="255"
                        step="1"
                        value="<?php echo $analogRed; ?>"
                        oninput="amountRed.value=AnalogValueRed.value">
                255</td>
        </tr>
        <tr>
            <td></td>
            <td align="center">
                <output name="amountRed"
                        id="amountRed"
                        for="AnalogValueRed" >
                    <?php echo $analogRed;?></output>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Green</td>
            <td>0<input type="range"
                        id="AnalogValueGreen"
                        name="AnalogValueGreen"
                        min="0"
                        max="255"
                        step="1"
                        value="<?php echo $analogGreen;?>"
                        oninput="amountGreen.value=AnalogValueGreen.value">
                255</td>
        </tr>
        <tr>
            <td></td>
            <td align="center">
                <output name="amountGreen"
                        id="amountGreen"
                        for="AnalogValueGreen"
                        style="text-align: center">
                    <?php echo $analogGreen;?></output>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td>Blue</td>
            <td>0<input type="range"
                        id="AnalogValueBlue"
                        name="AnalogValueBlue"
                        min="0"
                        max="255"
                        step="1"
                        value="<?php echo $analogBlue;?>"
                        oninput="amountBlue.value=AnalogValueBlue.value">
                255</td>
        </tr>
        <tr>
            <td></td>
            <td align="center">
                <output name="amountBlue"
                        id="amountBlue"
                        for="AnalogValueBlue" >
                    <?php echo $analogBlue;?></output>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Save" name="submit"></td>
        </tr>
    </table>
</form>