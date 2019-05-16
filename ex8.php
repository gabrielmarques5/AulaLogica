<?php
$v = array();
$i = 0;
$total = 0;

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 4; $j++) {
		echo "Digite um valor: ";
		$v[$i][$j] = readline();

		if (($i % 2) <> 0) {
			$total = $total + $v[$i][$j];
		}
	}
}

echo "A soma dos valores na posicao par e: ";
echo $total;
echo PHP_EOL;

?>
