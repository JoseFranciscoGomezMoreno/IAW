<?php
if ( isset($_POST["numero"]) && is_numeric($_POST["numero"]) && ($_POST["numero"] > 0) && !(preg_match("/\./", $_POST["numero"])) ){
    print "<a style=\"color:blue; text-align:center;\">" . $salida=str_repeat("*", $_POST["numero"]) . "</a>";
}
else{
    print "Error al encontrar numero";

}

?>