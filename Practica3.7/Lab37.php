<?php

if ( ($_GET["precio"] == null) || (is_numeric($_GET["precio"]) == 0) || ($_GET["tamaño"] == null) || (is_numeric($_GET["tamaño"]) == 0) ){
    print "<h1>Inserción de vivienda</h1>";
    print "<br/>";
    print "Debes introducir el precio de la vivienda y su tamaño";
    print "<br/><a href='formlab37.html')>Volver al formulario</a>";
}
else{
    print "<h1>Inserción de vivienda</h1>";
    print "<h2>Los datos introducidos son:</h2>";

    print "El tipo de vivienda elegido es " . $_GET["tipo"] . ".<br/>";
    
    print "La zona seleccionada es " . $_GET["zona"] . ".<br/>";
    
    if ( $_GET["direccion"] != null ){
        print "La dirección introducida es " . $_GET["direccion"] . ".<br/>";
    }
    
    if ( isset($_GET["habitaciones"]) != null ){
        print "La casa cuenta con " .  $_GET["habitaciones"] . " habitaciones.<br/>";
    }
    
    print "Su precio es de " . $_GET["precio"] . " € y su tamaño es " . $_GET["tamaño"] . " m2.<br/>";
    
    if ( isset($_GET["extra1"]) || isset($_GET["extra2"]) || isset($_GET["extra3"]) ){
        print "Extras: ";
        $contadorExtras = 0;
        for ( $i=1; $i <=3; $i++ ){
            if ( isset($_GET["extra$i"]) ){
                $contadorExtras++;
                if ( $contadorExtras == 1){
                    print $_GET["extra$i"];
                }
                elseif($contadorExtras > 1){
                    print ", " . $_GET["extra$i"];
                }
            }
        }
        print ".<br/>";
    }
    if ( $_GET["comentarios"] != null ){
        Print "Observaciones: ". $_GET["comentarios"] . "<br />";
    }
    print "<a href='formlab37.html')>Volver al formulario</a>";
}
?