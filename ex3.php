<?php
$m = array();
$i = 0;
$j = 0;

for ($i = 0; $i < 3; $i++) {
	$m[$i] = array();
	for ($j = 0; $j < 3; $j++) {
		$m[$i][$j] = 0;
	}
}

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 3; $j++) {
		echo "Digite um valor: ";
		$m[$i][$j] = readline();
	}
}

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 3; $j++) {
		echo "O valor na posicao i: ";
		echo $i;
		echo " j ";
		echo $j;
		echo " e: ";
		echo $m[$i][$j] . PHP_EOL;
	}
}
?>
