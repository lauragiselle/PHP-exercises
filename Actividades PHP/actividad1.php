<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>
  <?php
    //ACTIVIDAD 1 - LAURA GISELLE SILVA
    
    /*  EJERCICIO 1
        Dado un número entero positivo que tenemos asignado a una variable, determina si es par o impar ✔
        Haced todas las comprobaciones para que se determine exactamente que es un entero ✔
    */

    $num = 2;

    if ($num >= 0) {
        if ($num % 2 == 0) {
            echo "El número es par <br>";
        } else {
            echo "El número es impar <br>";
        }
    } else if ($num < 0) {
        echo "Debe escribir un número entero <br>";
    }

    /*  EJERCICIO 2
        Usando una estructura repetitiva, y una función aleatoria que genere  valores entre el 1 y el 100.
        Pintar los valores comprendidos entre 1 y el valor  que se genere por pantalla ✔
    */

    $num_aleat = rand(1, 100);
    echo "El número aleatorio es: ".$num_aleat."<br>";

    for ($i=1; $i <= $num_aleat; $i++) { 
        echo $i."<br>";
    }

    /*  EJERCICIO 3
        Del siguiente array asociativo:
        Pintar el array completamente ✔
        Obtener el apellido de la persona ✔
        Mostrar el array con los tipos de datos que tiene cada posición ✔
        Ordenar los valores de menor a mayor ✔
    */
    $personas = [
        "nombre" => "Jesús", 
        "apellidos" => "Fernández Toledo", 
        "ciudad" => "Casas de Fernando Alonso"
    ];
   
    //Pintar el array completo
    echo "Array completo: <pre>"; 
        print_r($personas);
    echo "</pre> <br>";

    //Obtener el apellido
    echo "Apellidos: <pre>"; 
        print($personas["apellidos"]);
    echo "</pre> <br>";

    //mostrar datos del array
    echo "Datos del array: <pre>"; 
        var_dump($personas);
    echo "</pre> <br>";
    
    //Ordenar los valores de menor a mayor 
    sort($personas);
    echo "Valores de menor a mayor: <pre>";
        print_r($personas);
    echo "</pre> <br>";

    /*  EJERCICIO 4
        Crear un Array indexado con los siguientes elementos: coche, moto, bici, patines, autobús y luego:
            1.	Contar los elementos de la matriz ✔
            2.	Reducir el tamaño para que aparezca sólo bici, patines ✔
            3.	Añadir dos elementos (los que queráis) ✔
            4.	Buscar el elemento o elementos que empiezan por P ✔
            5.	Ordenar la matriz  de mayor a menor. 
                a.	Primero por clave ✔
                b.	Luego por valor  ✔
    */

    $var = ['coche', 'moto', 'bici', 'patines', 'autobús'];
    echo "Matriz ejercicio 4: "."<pre>";
        print_r($var);
    echo "</pre> <br>";

    //Contar los elementos de la matriz
    echo "La cantidad de elementos de la matriz son: ".count($var)."<br> <br>";

    //Reducir el tamaño para que aparezca sólo bici, patines
    echo "Muestra los valores bici y patines: "."<pre>";
        print_r(array_slice($var, -3, -1));
    echo "</pre> <br>";

    //Añadir 2 elementos
    array_push($var,'avion', 'barco');
    echo "Añadir 2 elementos: <pre>";
        print_r($var);
    echo "</pre> <br>";

    //Mostrar elementos que empiezan por P
    $res = preg_grep("/^p/", $var);
    echo "Elementos que empiezan por P <pre>"; 
        print_r($res);
    echo "</pre> <br>";

    //Ordenar la matriz  de mayor a menor.
    //Primero por clave
    ksort($var);
    echo "Ordenar matriz por clave: <pre>";
        print_r($var);
    echo "</pre> <br>";

    //Luego por valor 
    sort($var);
    echo "Ordenar matriz por valor: <pre>";
        print_r($var);
    echo "</pre> <br>";
  ?>
</body>
</html>