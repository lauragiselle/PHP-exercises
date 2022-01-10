<?php
    $nombre = $_POST["nombre"];
    if (!empty($nombre)) {
        echo "Su nombre es: ".$nombre."<br>";
    }

    if (!empty($_POST["Resp"])) {
        echo "Su sexo es: ".$_POST["Resp"]."<br>";
    }
?>

