<?php
#Variable numerica
$numero = 7;
echo "Variable numerica: $numero";
echo "<br></br>";


#Variable texto

$palabra = "palabra";
echo "Variable de texto jonathan: $palabra";
echo "<br></br>";


#variable boleano
$boleano = true;
echo "esto es variable bolean: $boleano";
echo "<br></br>";


#variable arreglo
$Colores = array("verde","rojo","morado");
echo "esto es variable de arreglo: $Colores[0]";
echo "<br></br>";



#variable Arreglo con propiedad
$verdura = array("verdura1"=>"lechuga", "verdura2"=>"durazno");
echo "esto es variable arreglo de propiedad: $verdura[verdura1]";
echo "<br></br>";


#variable de objeto
$fruta = (object)["fruta1"=>"manzana", "verdura2"=>"durazno"];
echo "esto es variable de objeto: $fruta->fruta1";
echo "<br></br>";

?>