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

    function doOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case 'add':
                return add($arg1, $arg2);
            case 'sub':
                return sub($arg1, $arg2);
            case 'mul':
                return mul($arg1, $arg2);
            case 'div':
                return div($arg1, $arg2);
            case 'mod':
                return mod($arg1, $arg2);
            case 'pwr':
                return pwr($arg1, $arg2);
        }
    }

    print_r("a = $a; b = $b\n");
    print_r("Addition: " . doOperation($a, $b, "add") . "\n");
    print_r("Subtraction: " . doOperation($a, $b, "sub") . "\n");
    print_r("Multiplication: " . doOperation($a, $b, "mul") . "\n");

    $result = doOperation($a, $b, "div");
    echo ($result === NULL) ? "Divider is zero!\n" : "Division: $result\n";

    $result = doOperation($a, $b, "mod");
    echo ($result === NULL) ? "Divider is zero!\n" : "Mod. division: $result\n";

    print_r("Power: " . doOperation($a, $b, "pwr") . "\n");
?>