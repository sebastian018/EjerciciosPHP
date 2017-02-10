<!doctype html>
<html>
<head>
    <script>

    </script>
</head>
<body>
<h1>Verificar si un numero es capicua</h1>
<form method="post" action="Ejercicio6.php">
    <label>Introducir un Número: </label> <input type="text" id="num" name="num">
    <button id="btn" name="btn">Calcular</button>
</form>
</body>
</html>


<?php
// verificar si un número es capicua
 $valorleido = (isset($_POST['num']) ? $_POST['num'] : NULL);
$numinv = 0;
$cociente = $valorleido;
while ( $cociente != 0)
{
    $resto = $cociente % 10;
    $numinv = $numinv * 10 + $resto;
    $cociente = (int)($cociente / 10);
}
if ( $valorleido == $numinv )
    print "El número: " . $valorleido . " Es Capícua";
else
    print "El número: " . $valorleido . "NO es Capícua";
?>