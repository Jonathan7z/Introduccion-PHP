<?php
#Condiciones

$a = 20;
$b = 22;

if($a > $b){
    echo "a es mayor que b";
}
else if($a == $b){
    echo "a es igual que b";
}
else{
    echo "a es menor que b";
}

echo "<br><br>";

#Switch
$dia = "viernes";
switch($dia){
    case "jueves":
        echo "voy a hacer el parcial de programacion";
    break;

    case "viernes":
        echo "voy a jugar en mi pc";
    break;

    case "sabado":
        echo "voy a estar limpiando la casa";
    break;

    default: echo "voy a hacer el parcial de programacion";
}

echo "<br><br>";

#ciclo while
$n = 1;

while($n < 5){
    $n++;
    echo $n;
}

echo "<br><br>";

#ciclo do while
$p = 1;

do{
    echo $p;
    $p++;
}
while($p <= 5);

echo "<br><br>";

#ciclo for

for($i = 0; $i <= 5; $i++){
    echo $i;
}

?>