<?php
$v = array();
$i = 0;
$totalpar = 0;
$totalimpar = 0;

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 4; $j++) {
		echo "Digite um valor: ";
		$v[$i][$j] = readline();

		if (($i % 2) == 0) {
			$totalpar = $totalpar + $v[$i][$j];
		} else {
			$totalimpar = $totalimpar + $v[$i][$j];
		}
	}
}

echo "A soma dos valores par dividido pela somas dos valores impar é ";
echo $totalpar / $totalimpar;

?>
