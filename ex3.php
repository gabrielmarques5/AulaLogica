<?php
$v = array();
$i = 0;

for ($i = 0; $i < 10; $i++) {
	$v[$i] = 0;
}

for ($i = 0; $i < 10; $i++) {
	echo "Digite um valor inteiro: ";
	$v[$i] = readline();
}

for ($i = 0; $i < 10; $i++) {
	echo "O valor de v na posicao ";
	echo $i;
	echo " e : ";
	echo $v[$i];
        echo PHP_EOL; 
}
?>
