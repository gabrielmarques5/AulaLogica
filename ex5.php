<?php
$v = array();
$i = 0;
$total = 0;
$total = 1;

for ($i = 0; $i < 25; $i++) {
	echo "Digite um valor: ";
	$v[$i] = readline();
	$total = $total * $v[$i];
}

echo "A multiplicacao de todos os valores do vetor e: ";
echo $total;
echo PHP_EOL;
?>
