<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title></title>
</head>
<body>
  <?php
        //ACTIVIDAD 2 - LAURA GISELLE SILVA

        /*  EJERCICIO 1: Crear un menú con las siguientes opciones:
            1. Listar el array ordenado de manera ascendente y descendiente.
            2. Mostrar con array_filter los elementos que son positivos. 
            3. Mostrar si existe un valor, lo fijamos nosotros.
            4. Salir
        */
        menu();
        
        echo opcionesMenu(1);
        echo opcionesMenu(2);
        echo opcionesMenu(3);
        echo opcionesMenu(4);
        
        function opcionesMenu($pos) { 
            $numbers = [-20, -3, 50, -99, 55];
            
            switch ($pos) {
                case 1:
                    mostrarArray($numbers);
                    break;
                case 2:
                    $res = array_filter($numbers, 'sonPositivos');
                    echo "<pre>";
                        print_r($res);
                    echo "</pre> <br>";
                    break;
                case 3:
                    mostrarValor($numbers);
                    break;
                case 4:
                    salir();
                    break;
                default:
                    return 'La opción no es correcta, debe elegir un número del menú';
            }
        }

        function menu(){
            print "<pre>";
                print "Menu: <br>";
                print "1. Listar el array ordenado de manera ascendente y descendiente. <br>";
                print "2. Mostrar con array_filter los elementos que son positivos. <br>"; 
                print "3. Mostrar si existe un valor, lo fijamos nosotros. <br>";
                print "4. Salir <br>";
            print "</pre> <br>";
        }

        //array ordenado
        function mostrarArray($array){
            sort($array);
            echo "<pre>";
                print_r($array);
            echo "</pre> <br>";
        }

        //elementos positivos
        function sonPositivos($array){
            return $array >= 0;
        }

        //Mostrar si existe un valor
        function mostrarValor($array){
            if (in_array(55, $array)) {
                echo "<pre> Si existe el valor </pre> <br>";
            } else {
                echo "<pre> No existe el valor </pre> <br>";
            }
        }

        //salir del ejercicio
        function salir(){
            print "<pre>  Has salido correctamente </pre>";
        }
  ?>
</body>
</html>