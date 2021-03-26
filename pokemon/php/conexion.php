<?php 

	//Aqui generamos los datos correspondientes a la base de datos
    $dbhost = "localhost"; //Nombre del host
    $dbuser = "root"; //Nombre del usuario, root siempre es el predeterminado
    $dbpass = ""; //Si el usuario es root, este campo se deja basio
    $db = "poquemon"; //Nombre de la base de datos

    //Aqui generamos la conexion 
    // $conn se usara para el php de registro e ingreso
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    //Esta condicion sirve para identificar si hay algun error en la conexion con la db
    if(!$conn) {
        die("No hay conexion" .mysqli_connect_error());
    }
?>