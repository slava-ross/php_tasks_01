<?php

$strVar = "Hello! I'm a young php-fellow.";
// $intVar = 18384000; // php ver. is below 7.4.0
$intVar = 18_384_000; // php ver. 7.4.0 and above
$floatVar = 1212.5656;

const ABS_ZERO = -273.15;

// String variable
echo $strVar;
echo "\n";

// Integer variable
echo $intVar;
echo "\n";

// Float/Real/Double variable
echo $floatVar;
echo "\n";

// Constant
echo ABS_ZERO;
echo "\n";

// Octal notation
echo 01777;
echo "\n";

// Hexadecimal notation
echo 0xFFFF;
echo "\n";