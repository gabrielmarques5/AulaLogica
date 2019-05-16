<?php
$v = array();
$i = 0;
$total = 0;

for ($i = 0; $i < 20; $i++) {
	echo "Digite um valor: ";
	$v[$i] = readline();

	if (($i % 2) <> 0) {
		$total = $total + $v[$i];
	}
}

echo "A soma dos valores na posicao par e: ";
echo $total;
echo PHP_EOL;

?>
