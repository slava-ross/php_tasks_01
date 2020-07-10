<?php

$strVar = "Hello! I'm a young php-fellow.";
$intVar = 18_384_000;
$floatVar = 1212.5656;

/* В двойных кавычках распознаются спецсимволы и управляющие коды,
 * происходит подстановка значений переменных.
 */

// String variable
echo "$strVar\n";
echo "\n";

// Integer variable
echo "$intVar\n";
echo "\n";

// Float/Real/Double variable
echo "$floatVar\n";
echo "\n";

/* В апострофах строка воспринимается "как есть",
 * но обнаруживается экранирование символа "\" и выполняется замена: \\ --> \
 */

// String variable
echo '$strVa\\r\n';
echo "\n";

// Integer variable
echo '$intVar\n';
echo "\n";

// Float/Real/Double variable
echo '$floatVar\n';
echo "\n";