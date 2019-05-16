<?php
$v = array();
$i = 0;
$total = 0;

for ($i = 0; $i < 15; $i++) {
	echo "Digite um valor: ";
	$v[$i] = readline();
	$total = $total + $v[$i];
}

echo "A soma de todos os valores do vetor e: ";
echo $total;
echo PHP_EOL;
?>
