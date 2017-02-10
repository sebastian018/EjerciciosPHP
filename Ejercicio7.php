<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="js/jquery-3.1.1.js"></script>
    <script>
        function Calcular(){
            var km = $("#Kilometraje").val();
            $.ajax({
                method: "POST",
                url: "Ejm7.php?Prueba=" +km,
                data: { Kilometraje: km}
            })
                .done(function( msg ) {
                 alert("Con "+km+ " Kilometro(s) su Automovil Gasta: " + msg + " Litro(s) de Gasolina");
                });
        }
    </script>
</head>
<body>

<form method="post" action="Ejm7.php">
    <label>Digite el numero de Kilometros de Recorrido:</label>
    <br>
    <input type="text" id="Kilometraje">
    <br>
    <input type="button" id="btn" onclick="Calcular()">
    <div><a id="caja"></a></div>
</form>
</body>
</html>

