<?php
    //vivienda
    $vivienda = $_POST["vivienda"];
    if (empty($vivienda)) {
        //imprime un error si lo dejan vacio
        die("Error: el campo no puede estar vacio");
    } else {
        echo "La vivienda es: ".$vivienda."<br>";
    }

    //zona
    $zona = $_POST["zona"];
    if (!empty($zona)) {
        //mientras no este vacio imprimir la zona que ha elegido
        echo "Seleccionaste la siguiente zona: ".$zona."<br>";  
    }

    //direccion
    $direccion = $_POST["direccion"];
    if (!empty($direccion)) {
        echo "La direccion es: ".$direccion."<br>";
    }
    

    //habitaciones
    if (!empty($_POST["room"])) {
        echo "La cantidad de habitaciones es: ".$_POST["room"]."<br>";        
    }

    //precio
    $precio = $_POST["precio"];
    if (empty($precio)) {
        die("Error: debe ingresar un precio"); //imprime un error si lo dejan vacio
    } else {
        echo "El precio es: ".$precio."<br>";
    }

    //tamaño
    $tamanio = $_POST["tamanio"];
    if (!empty($direccion)) {
        echo "El tamaño es: ".$tamanio."<br>";
    }
    
    //extras
    if (!empty($_POST["extra1"]) || !empty($_POST["extra2"]) || !empty($_POST["extra3"])) {
        echo "Eligio los siguientes extras: <br>";
        if (isset($_POST["extra1"])) {
            echo $_POST["extra1"]."<br>";
        }

        if (isset($_POST["extra2"])) {
            echo $_POST["extra2"]."<br>";
        }

        if (isset($_POST["extra3"])) {
            echo $_POST["extra3"]."<br>";
        }
    }

    //comentarios
    $comentarios = $_POST["comentarios"];
    if (!empty($comentarios)) {
        echo "<h4> <b> Comentario: ".$_POST["comentarios"]."<h4> <b>";
    }
?>