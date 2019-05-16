<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 5; $i++) {
	echo "Digite um nome: ";
	$p["nome"] = readline();
	echo "Digite o sexo: ";
	$p["sexo"] = readline();
	echo "Digite a idade: ";
	$p["idade"] = readline();
	$cad[$i] = $p;
}
?>
