
<html>
<head>
    <script src="js/jquery-3.1.1.js" ></script>
	<title></title>
    <script >
    function calcular() {
    var Nt = $("#nota").val();
    $.ajax({
    method: "POST",
    url: "Ejm11.php?logica="+Nt,
    data: {nota: Nt}
    })

    .done(function( msg ) {

    texto = document.getElementById("caja")
    texto.innerHTML =  msg ;


    });
    }
    </script>

</head>
<body>
<h1>Ingrese su Nota</h1>
<input type="text" id="nota">
<input type="button" onclick="calcular()" value="Resultado">
<div><a id="caja"></a></div>
</body>
</html>