<?php
//Se llama la conexion
    include("conexion.php");

    //Creamos unas variables que resiviran los valores de los inputs estos corresponden al name colocado
    $user = $_POST["usuario"];
    $clave = $_POST["clave"];    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];


    //Registrar
        // Generamos un INSERT, la variable $sqlgrabar tomara si la informacion si fue insertada
        $sqlgrabar = "INSERT INTO usuario(user,clave,nombre,apellido,correo) values ('$user', '$clave', '$nombre', '$apellido', '$correo')";

        //Hacemos una consulta if para verificar, si la conexion es correcta y los datos tambien mostrara usuario registrado
        // de lo contrario dira usuario ya existe o no se a logrado registrar y dira el motivo o error
        if(mysqli_query($conn, $sqlgrabar)){
            //El window.location sirve para dirigir al usuario a otra pagina de html
            echo "<script> alert('Usuario registrado con exito: $user'); window.location='../index.html' </script>";
        } else {
            echo "<script> alert('Usuario ya existe, no se ha logrado registrar'); window.location='../registro.html' </script>";
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
?>