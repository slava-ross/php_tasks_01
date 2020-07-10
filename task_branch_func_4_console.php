<?php
    const START_A = 8;
    const START_B = -3;

    $a = START_A;
    $b = START_B;

    function add($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a - $b;
    }

    function mul($a, $b) {
        return $a * $b;
    }

    function div($a, $b) {
        if (!$b) {
            return NULL;
        }
        else {
            return $a / $b;
        }
    }

    function mod($a, $b) {
        if (!$b) {
            return NULL;
        }
        else {
            return $a % $b;
        }
    }

    function pwr($a, $b) {
        return $a ** $b;
    }

    print_r("a = $a; b = $b\n");
    print_r("Addition: " . add($a, $b) . "\n");
    print_r("Subtraction: " . sub($a, $b) . "\n");
    print_r("Multiplication: " . mul($a, $b) . "\n");
    echo (div($a, $b) === NULL) ? "Divider is zero!\n" : "Division: " . div($a, $b) . "\n";
    echo (mod($a, $b) === NULL) ? "Divider is zero!\n" : "Modulo division: " . mod($a, $b) . "\n";
    print_r("Power: " . pwr($a, $b) . "\n");
?>