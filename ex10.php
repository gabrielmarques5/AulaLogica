<?php
$v = array();
$i = 0;

for ($i = 0; $i < 10; $i++) {
	if (($v[$i] % 2) == 0) {
		$v[$i] = 8;
	} else {
		$v[$i] = 3;
	}
}
?>
