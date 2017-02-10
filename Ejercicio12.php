<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript">
        function jugar(opcion) {
            var num = $("#n").val();
            $.ajax({
                method: "POST",
                url: "Ejm12.php?Juego="+opcion,
                data: { }
            })
                .done(function( msg ) {
                    if (opcion == "Cargar"){
                        alert("Se ha generado un nuevo número para adivinar");
                    }else{
                        alert("La Longitud del Circulo con Radio "+radio+" es de: "+ msg);
                    }
                });
        }
    </script>
</head>
<body>
<h1>Adivinar Numero</h1>
<p>El juego consiste en adivinar un numero de 0 al 20.</p>
<p>Una vez el numero sea adivinado se carga automaticamente el otro numero para adivinar</p>
<p>Dar click en el boton Cargar para generar el numero para adivinar</p>
<form method="post" action="Ejm12.php">
<input type="button" id="Cargar" onclick="jugar('Cargar')" value="Generar">
<br>
<input type="number" id="n">
<input type="button" id="adivinar"onclick="jugar('Intento')" value="Probar">
</form>
</body>
</html>


var numero;
function cargar(){
numero = Math.floor(Math.random() * 20);
};

function juego(){
var num = document.getElementById('n').value

if(num > 20){
alert("Numero fuera de rango");
} else if(num > numero){
alert("El numero ingresado es Mayor");
} else if(num < numero){
alert("El numero ingresado es Menor");
} else if(num == numero){
alert("Felicitaciones, te has ganado una menta");
numero = Math.floor(Math.random() * 20);
};
};