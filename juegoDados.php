<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso Ud 5 Dados</title>
    <!--Aplicamos estilos a la Tabla-->
    <style>
        h1 {

            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            text-decoration: underline;
        }
        body {
            color: indigo;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<h1>Juega a los Dados</h1>

    <?php
    include("claseDado.php"); //Mediante la función INCLUDE accedemos al fichero de la clase Dados

    $dado = new Dado(0,12); //Creamos un objeto de la clase Dado, y le pasamos los parámetros mínimo y máximo

    for ($i=1; $i <=12 ; $i++) { //Mediante el bucle FOR repetimos el ciclo hasta completar las 12 tiradas
        echo "Lanzamiento nº " .$i . " = " .$dado->tirar_Dados() . "<br>"; 
    }
   
    ?>
    
</body>
</html>

