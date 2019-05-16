<?php
$v = array();
$i = 0;
$total = 0;

for ($i = 0; $i < 2; $i++) {
	for ($j = 0; $j < 2; $j++) {
		echo "Digite um valor: ";
		$v[$i][$j] = readline();
		$total = ($total * $v[$i][$j]) / ($total + $v[$i][$j]);
	}
}

echo "A multiplicaчуo dos valores dividido pela soma dos valores щ: ";
echo $total;

?>