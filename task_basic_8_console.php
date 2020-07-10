<?php
/* Оператор XOR - выполняет операцию "исключающее ИЛИ" или "сложение по модулю 2".
 * Возвращает "истину", если оба операнда имеют различное значение, иначе - возвращает "ложь".
 * При выполнении операции xor для операнда с самим собой результат, соответственно,
 * всегда будет равен "ложь" (или нулю - для двоичного представления).
 */

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
?>