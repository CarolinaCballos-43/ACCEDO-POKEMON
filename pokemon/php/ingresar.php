<?php
//Se llama la conexion
    include("conexion.php");

    //Creamos unas variables que resiviran los valores de los inputs estos corresponden al name colocado
    $user = $_POST["usuario"];
    $clave = $_POST["clave"];


    // En este ejemplo se creara el registro e Ingreso en la misma pagina
    // Por lo que crearemos dos condiciones una para ver si recibe la informacion del boton de ingreso
    // Y otra para ver si la informacion se ingresa desde el boton de registro

    //Login 
        //Llamamos a conexion $conn y buscamos si los datos si existen 
        $query = mysqli_query($conn, "SELECT * FROM usuario WHERE user = '$user' AND clave = '$clave' ");
        //guardamos el resultado en la variable %nr
        $nr = mysqli_num_rows($query);

        // Si los datos obtenidos existen (1 = TRUE) ingresa, de lo contrario dira el usuario no existe
        if($nr == 1){
            echo "<script> window.location='../inicio.html' </script>";
        } else {
            echo "<script> alert('Usuario no existe'); window.location='../index.html' </script>";
        }
?>