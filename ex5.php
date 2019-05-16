<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 5; $i++) {
	echo "Digite o nome: ";
	$p["nome"] = readline();
	echo "Digite o genero: ";
	$p["genero"] = readline();
	echo "Digite o ano: ";
	$p["ano"] = readline();
	$cad[$i] = $p;
}
?>
