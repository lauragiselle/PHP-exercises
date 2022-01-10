<?php
    $nombre = $_GET["nombre"];
    $sueldo = $_GET["sueldo"];

    if (empty($nombre)) {
        die("No se ha introducido el nombre");
    } else {
        echo "Su nombre es: ".$nombre."<br>";
    }

    if ($sueldo < 0) {
        die("Error: El sueldo debe ser mayor o igual a cero");
    } elseif ($sueldo <= 1000) {
        echo "No paga impuestos";
    } elseif ($sueldo <= 3000) {
        echo "Paga el 20% de impuestos";
    } else {
        echo "Debe pagar el 50% de impuestos";
    }
?>