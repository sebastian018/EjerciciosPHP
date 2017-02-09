<!DOCTYPE html>
<html>
<body>
<form method="post" action="Ejercicio4.php">
<label>Ingrese un Numero: </label><input type="number" id="num" name="num">
<button id="btn" name="btn" type="submit">ver</button>
</form>
</body>
</html>

<?php
            $num = (isset($_POST["num"])) ? $_POST["num"] : NULL;
            $nu = strrev($num);
            echo "Su numero es:  " . $nu;