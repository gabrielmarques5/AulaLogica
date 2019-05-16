<?php
$v = array();
$i = 0;
$mult = 0;
$soma = 0;


$mult = 1;
for ($i = 0; $i < 5; $i++) {
	echo "Digite um valor: ";
	$v[$i] = readline();
	$mult = $mult * $v[$i];
	$soma = $soma + $v[$i];
}

echo "A multiplicacao dos valores dividido pela soma dos valores e: ";
echo $mult / $soma;
echo PHP_EOL;

?>
