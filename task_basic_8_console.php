<?php

function printXOR($a, $b)
{
	if ($a)	{
		print_r("true\t\t");
	}
	else {
		print_r("false\t\t");
	}

	if ($b)	{
		print_r("true\t\t");
	}
	else {
		print_r("false\t\t");
	}

	if ($a xor $b) {
		print_r("true\t\t");
	}
	else {
		print_r("false\t\t");
	}
	echo "\n";
}

echo "\n\$a\t\t\$b\t\t\$a xor \$b\n\n";
printXOR(false, false);
printXOR(false, true);
printXOR(true, false);
printXOR(true, true);
echo "\n";

/*
 *
 *
 */

?>