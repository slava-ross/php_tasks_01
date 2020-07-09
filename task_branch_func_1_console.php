<?php
	/*
	 *
	 *
	 */

	const START_A = -8;
	const START_B = -3;

	$a = START_A;
	$b = START_B;

	// print_r("\$a = $a" . "; \$b = $b\n");

	if ($a >= 0 && $b >= 0) {
		print_r($a + $b);
	}
	elseif ($a < 0 && $b < 0) {
		print_r($a - $b);
	}
	else {
		print_r($a * $b);
	}
?>