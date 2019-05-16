<?php
$v = array();
$i = 0;
$totalpar = 0;
$totalimpar = 0;

for ($i = 0; $i < 10; $i++) {
	echo "Digite um valor: ";
	$v[$i] = readline();

	if (($i % 2) == 0) {
		$totalpar = $totalpar + $v[$i];
	} else {
		$totalimpar = $totalimpar + $v[$i];
	}
}

echo "A soma dos valores par dividido pela soma dos valores impar é: ";
echo $totalpar / $totalimpar;

?>
