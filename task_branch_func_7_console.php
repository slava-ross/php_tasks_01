<?php
    const START_A = 8;
    const START_B = 30;

    $a = START_A;
    $b = START_B;
    $result = NULL;

    function maxValue($a, $b) {
        if ($a >= $b) {
            return $a;
        }
        else {
            return $b;
        }
    }

    function minValue($a, $b) {
        if ($a <= $b) {
            return $a;
        }
        else {
            return $b;
        }
    }

    $mul = $a * $b; // для читабельности, а то и для скорости выполнения при отсутствии оптимизации кода.

    if ($mul > 100 && $mul < 1000) {
        print_r(maxValue($a, $b) - minValue($a, $b) . "\n");
    }
    elseif ($mul > 1000) {
        $result = $a * $b / maxValue($a, $b); // в задании не сказано, что сделать с результатом.
        // print_r("$result\n"); // for debug
    }
?>