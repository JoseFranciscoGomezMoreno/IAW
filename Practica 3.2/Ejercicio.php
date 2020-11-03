<?php

if (isset($_GET["nombre"]) && isset($_GET["apellidos"]) && isset($_GET["edad"]) && isset($_GET["salario"])){
    
    $salario=$_GET["salario"];
    
    if ($salario > 2000){
        $salario=$salario;
    }
    elseif ($salario >= 1000 && $salario <= 2000){
        if ($_GET["edad"] > 45){
            $salario=$salario * 1.03;
        }
        elseif ($_GET["edad"] <= 45){
            $salario=$salario * 1.1;
        }
    }
    elseif ($salario < 1000){
        if ($_GET["edad"] < 30){
            $salario=1100;
        }
        elseif ($_GET["edad"] >= 30 && $_GET["edad"] <=45){
            $salario=$salario * 1.03;
        }
        elseif ($_GET["edad"] > 45){
            $salario=$salario * 1.15;
        }
    }
    
    print $_GET["nombre"] . " " . $_GET["apellidos"] . ", tu salario sera " . $salario . " euros.";
}
else{
    header("Location:form-practica.html");
}

?>