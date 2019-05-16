<?php
$v = array();
$i = 0;

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 4; $j++) {
		if (($m[$i][$j] % 2) == 0) {
			$m[$i][$j] = 8;
		} else if (($m[$i][$j] % 2) <> 0) {
			$m[$i][$j] = 3;
		} else {
			$m[$i][$j] = 0;
		}
	}
}
?>
