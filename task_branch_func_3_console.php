<?php
	const START_A = 2; // [0..9]

	$a = START_A;

	switch ($a) {
		case 0:
			echo $a, " ";
			$a++;
		case 1:
			echo $a, " ";
			$a++;
		case 2:
			echo $a, " ";
			$a++;
		case 3:
			echo $a, " ";
			$a++;
		case 4:
			echo $a, " ";
			$a++;
		case 5:
			echo $a, " ";
			$a++;
		case 6:
			echo $a, " ";
			$a++;
		case 7:
			echo $a, " ";
			$a++;
		case 8:
			echo $a, " ";
			$a++;
		case 9:
			echo $a, " ";
			$a++;
			break;
		default:
			echo 'Задайте правильное значение! $a = [0..9]';
	}
?>