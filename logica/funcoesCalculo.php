<?php
function adicao($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}
function subtracao($num1, $num2){
    $result = $num1 - $num2;
    return $result;
}
function multiplicacao($num1, $num2){
    $result = $num1 * $num2;
    return $result;
}
function divisao($num1, $num2){
    $result = $num1 / $num2;
    return $result;
}
function fehrenheit($num1){
    $result = ($num1 * 1.8 + 32);
    return $result;
}
function celcius($num1){
    $result = ($num1 - 32)* 0.55;
    return $result; 

}
function metros($num1){
    $result = $num1 / 100;
    return $result;
}
function centimetros($num1){
    $result = $num1 * 100;
    return $result;
}
function kmmetros($num1){
    $result = $num1 * 1000;
    return $result;
}
function km($num1){
    $result = $num1 / 1000;
    return $result;
}
?>  