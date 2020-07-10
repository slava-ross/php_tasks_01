<?php
    const VALUE = 2;
    const POWER = -3;

    $x = VALUE;
    $n = POWER;

    function power($val, $pow) {
        if ($pow === 0) {
            return 1;
        }
        if ($pow < 0) {
            return power(1/$val, -$pow);
        }
        return $val * power($val, $pow - 1);
    }

    print_r("x = $x; n = $n\n");
    print_r("Power: " . power($x, $n) . "\n");
?>