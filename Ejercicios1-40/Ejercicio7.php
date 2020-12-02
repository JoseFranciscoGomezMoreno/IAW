<?php

$var=rand(-100,100);
if ($var%2 == 0){
    print "El número es par";
}
elseif ($var%2 == (1 || -1)){
    print "El número es impar";
}
else{
    print "No hay numero";
}
print "\n".$var;

?>