<?php
if ( isset($_GET["filas"]) && isset($_GET["columnas"]) ){

    print "<table style=\"border-collapse:collapse;\">";
    print str_repeat(("<tr>" .
        str_repeat("<td style=\"border:2px solid black; border-collapse:collapse;\">hola</td>", $_GET["columnas"]) . 
        "</tr>"), $_GET["filas"]);
    print "</table>";

}
else{
    print "Error al encontrar variable";
}

?>