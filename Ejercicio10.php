<?php
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$año = $_POST["año"];
echo "<pre>";
var_dump($_POST);
echo "</pre>";
if ($dia == 1-31 && $mes == 1-12 && $año!=0 )
{
    $result = "La fecha "." ". $dia."/".$mes."/".$año."   Es Correcta";
}
else {
    $result = "La fecha "." ". $dia."/".$mes."/".$año. "  Es Incorrecta";
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="post">
    <label>Digite un dia del año(1-31)</label>
    <input required type="number" id="numero" name="dia" ><br>
    <label>Digite un mes del año (1-12)</label>
    <input required type="number" id="numero" name="mes" ><br>
    <label>Digite un  año(0-&)</label>
    <input required type="number" id="numero" name="año" ><br>
    <button type="submit">VerFechaCorrecta</button> <br>

    <?php
    echo $result;
    ?>

</form>
</body>
</html>