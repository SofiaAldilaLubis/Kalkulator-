<!DOCTYPE html>

<html>

    <body>

<link rel="stylesheet" href="style.css">

<div class="wadah">

    <fieldset id="wadah">

        <h3>Karce</h3>

        <form name="kalkulator">



            <input id="display" type="text" name="display" readonly>



            <input class="button digits" type="button" value="7" onclick="calculator.display.value += '7'">

            <input class="button digits" type="button" value="8" onclick="calculator.display.value += '8'">

            <input class="button digits" type="button" value="9" onclick="calculator.display.value += '9'">

            <input class="button mathButtons" type="button" value="+" onclick="calculator.display.value += ' + '">

            <br>

            <input class="button digits" type="button" value="4" onclick="calculator.display.value += '4'">

            <input class="button digits" type="button" value="5" onclick="calculator.display.value += '5'">

            <input class="button digits" type="button" value="6" onclick="calculator.display.value += '6'">

            <input class="button mathButtons" type="button" value="-" onclick="calculator.display.value += ' - '">

            <br>

            <input class="button digits" type="button" value="1" onclick="calculator.display.value += '1'">

            <input class="button digits" type="button" value="2" onclick="calculator.display.value += '2'">

            <input class="button digits" type="button" value="3" onclick="calculator.display.value += '3'">

            <input class="button mathButtons" type="button" value="x" onclick="calculator.display.value += ' * '">

            <br>

            <input id="clearButton" class="button" type="button" value="C" onclick="kalkulator.display.nilai = ''">

            <input class="button digits" type="button" value="0" onclick="calculator.display.value += '0'">

            <input class="button mathButtons" type="button" value="=" onclick="kalkulator.display.nilai = eval(kalkulator.display.nilai)">

            <input class="button mathButtons" type="button" value="/" onclick="calculator.display.value += ' / '">

        </form>

    </fieldset>

</div>

</body>

</html>
