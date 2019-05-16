<?php
$m = array();
$i = 0;
$j = 0;
$total = 0;

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 3; $j++) {
		echo "Digite um valor: ";
		$m[$i][$j] = readline();
		$total = $total + $m[$i][$j];
	}
}

echo "A soma de todos os valores é: ";
echo $total;
echo PHP_EOL;

?>
