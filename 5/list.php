<?php

$info = array('Café', 'marrom', 'cafeína');

// Listando todas as variáveis
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";
echo "<hr>";

// Listando apenas alguns deles
list($bebida,, $substancia) = $info;
echo "$bebida tem $substancia.\n";
echo "<hr>";

// Ou ignoramos os primeiros valores para conseguir apenas o último 
list(,, $substancia) = $info;
echo "I need $substancia!\n";
echo "<hr>";

// list() não funciona com strings
list($bar) = "abcde";
var_dump($bar); // NULL
echo "<hr>";

# foreach
$val = [
    [20, 30],
    [35, 45],
];
foreach ($val as list($num1, $num2)) {
    echo "First: $num1; Second: $num2<br />";
}