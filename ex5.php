<?php
$m = array();
$i = 0;
$j = 0;
$total = 0;

$total = 1;
for ($i = 0; $i < 2; $i++) {
	for ($j = 0; $j < 2; $j++) {
		echo "Digite um valor: ";
		$m[$i][$j] = readline();
		$total = $total * $m[$i][$j];
	}
}

echo "A multiplica��o de todos os valores �: ";
echo $total;
echo PHP_EOL;

$total = 0;
for ($i = 0; $i < 2; $i++) {
	$total = $total + $m[$i][$i];
}

echo "A soma dos valores da diagonal �: ";
echo $total;
echo PHP_EOL;
?>
