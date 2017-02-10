<?php
$ValorE = (isset($_POST["valorE"]) ? $_POST["valorE"] : NULL);
$Impuesto1 = 300;
$SAT = 30;
$Impuesto2 = $ValorE * 0.05;
$Resultado = $ValorE + $Impuesto1 + $Impuesto2 + $SAT;
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="post">
    <label>Digite el valor del equipo a comprar</label>
    <input type="number" name="valorE"  required >
    <button type="submit">VerPrecio</button> <br>

    <?php
    echo "El valor del Impuesto es "."$".$Impuesto1."<br>";
    echo "El valor del SAT es "."$".$SAT."<br>";
    echo "El valor del impuesto (soldados) es "."$".$Impuesto2."<br>";
    echo "El valor total del equipo es "."$".$Resultado. "<br>";
    ?>
</form>
</body>
</html>