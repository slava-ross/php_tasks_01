<?php
    $num = 0;
    do {
        if (!$num) {
            echo "0 - Это ноль\n";
        }
        elseif ($num % 2 === 0) {
                echo "$num - чётное число\n";
        }
        else {
            echo "$num - нечётное число\n";
        }
        $num++;
    }
    while ($num <= 10);
?>