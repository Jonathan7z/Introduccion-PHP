<?php
#Variable numerica
$numero = 7;
echo "Variable numerica: $numero<br>";
var_dump($numero);
echo "<br></br>";

#Variable texto
$palabra = "palabra";
echo "Variable de texto jonathan: $palabra<br>";
var_dump($palabra);
echo "<br></br>";


#variable boleano
$boleano = true;
echo "esto es variable bolean: $boleano<br>";
var_dump($boleano);
echo "<br></br>";


#variable arreglo
$Colores = array("verde","rojo","morado");
echo "esto es variable de arreglo: $Colores[0]<br>";
var_dump($Colores);
echo "<br></br>";



#variable Arreglo con propiedad
$verdura = array("verdura1"=>"lechuga", "verdura2"=>"durazno");
echo "esto es variable arreglo de propiedad: $verdura[verdura1]<br>";
var_dump($verdura);
echo "<br></br>";


#variable de objeto
$fruta = (object)["fruta1"=>"manzana", "verdura2"=>"durazno"];
echo "esto es variable de objeto: $fruta->fruta1<br>";
var_dump($fruta);
echo "<br></br>";

?>