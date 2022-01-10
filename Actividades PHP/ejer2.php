<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>
  <?php
    /*  EJERCICIO 2: Con el siguiente array se nos pide que, usando funciones anónimas, 
        demos respuesta a las 2 preguntas siguientes:
        1. Mostrar los apartamentos que sean de Benidorm. 
        2. Mostrar la suma de los precio/noche de todos nuestros apartamentos 
    */
    $apartamentos = [ 
        ['precio/noche' => 40,
        'ciudad' => 'Valencia', 
        'wifi' => True, 
        'página web' => 'https: //hotel.com'],

        ['precio/noche' => 87, 
        'ciudad' => 'Calpe',
        'wifi' => True,
        'página web' => 'https: //calpe.com'],

        ['precio/noche' => 67, 
        'ciudad' => 'Valencia', 
        'wifi' => False, 
        'página web' => 'https: //denia.com'], 

        ['precio/noche' => 105, 
        'ciudad' => 'Benidorm',
        'wifi' => False,
        'página web' => 'https://benidorm.com'] 
    ];

    //apartamentos de Benidorm. 
    $apartBenidorm = array_filter($apartamentos, function($elemento) {
        foreach ($elemento as $clave => $valor) {
            if ($clave == 'ciudad') {
                return $valor == 'Benidorm';
            }
        }
        return false;
    });

    echo "<pre>";
        print_r($apartBenidorm);
    echo "<pre> <br>";

    //suma de los precio/noche
    //primero busco los precios por noche y los guardo en un nuevo array $precios
    $precios = array_map(function($elemento) {
        foreach ($elemento as $key => $value) {
            if ($key == 'precio/noche') {
                return  $value;
            }
        }
    }, $apartamentos);

    //recorro el array $precios para sumar sus valores
    $sumaPrecios = array_reduce($precios, function($v1, $v2){
        return $v1 + $v2;
    });

    print "El precio total es: ".$sumaPrecios."<br>";

  ?>
</body>
</html>