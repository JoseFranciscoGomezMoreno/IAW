<?php
if ( isset($_GET["peso"]) && is_numeric($_GET["peso"]) && isset($_GET["altura"]) && is_numeric($_GET["altura"]) ){
    $imc = ( $_GET["peso"] / ($_GET["altura"]**2) );
    if ( round($imc, 1) <= 18.5 ){
        print "Su IMC es " . round($imc, 1) . ". Su peso es bajo.";
    }
    elseif ( round($imc, 1) <= 24.9 ){
        print "Su IMC es " . round($imc, 1) . ". Su peso es normal.";
    }
    elseif ( round($imc, 1) <= 29.9 ){
        print "Su IMC es " . round($imc, 1) . ". Tiene sobrepeso.";
    }
    elseif ( round($imc, 1) > 30 ){
        print "Su IMC es " . round($imc, 1) . ". Tiene obesidad.";
    }
    else{}
}
else{
    header("Location:formlab38.html");
}
?>