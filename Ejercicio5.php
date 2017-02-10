<!DOCTYPE html>
<html>
<head>
</head>
<body>
<style type="text/css">
    li{
        color: #ff3a0b;
    }

</style>
<ul>
    <li>Escriba "a" si quiere ver los datos de los alumnos que midan mas de 1.75m</li>
    <li>Escriba "b" si quiere ver los datos de los alumnos que tienen una edad mayor a 18</li>
    <li>Escriba "c" si quiere ver todos los datos de los alumnos</li>
</ul>
<form method="post" action="Ejercicio5.php">
    <label>Escriba la edad o estatura requerida: </label> <input type="text" id="estatura" name="estatura">
<button type="submit" id="btn" name="btn">Ver</button>
</form>
</body>
</html>
<?php


    $a = array(15,170);
    $b = array(16,166);
    $c = array(17,175);
    $d = array(18,160);
    $e = array(19,178);

        $variable = (isset($_POST['estatura']) ? $_POST['estatura'] : NULL);
        if ($variable == "a")
        {


            echo "Los alumnos que miden mas de 175 tienen --->(años,estatura): ". $c[0] . ", " . $c[1] ." y " . $e[0] .
                ", " . $e[1];
        }
        else if ($variable == "b")
        {

            echo "Los alumnos que son mayores de 18 años  --->(años,estatura): ". $d[0] . ", " . $d[1] . " y ". $e[0] .
        ", " . $e[1];
        }
        else if ($variable=="c")
        {

            echo "Los datos de los alumnos --->(años,estatura): " . $a[0] . ", " . $a[1] . "--" . $b[0] . ", " . $b[1] .
                "--" . $c[0] . ", " . $c[1] . "--" . $d[0] . ",  " . $d[1] . "y " . $e[0] . "--" . $e[1];
        }


