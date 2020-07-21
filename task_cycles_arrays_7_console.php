<?php
    const INPUT_STRING = "Ведомость расходов АМОУ ДОД ДШИ-2 за Октябрь 2022";

    function fillSpaces($rusStr) {
        $outStr = "";
        for ($index = 0; $index < mb_strlen($rusStr); $index++) {
            $currentSymbol = mb_substr($rusStr, $index, 1);
            if ($currentSymbol === ' ') {
                $outStr .= '_';
            }
            else {
                $outStr .= $currentSymbol;
            }
        }
        return $outStr;
    }

    $inputString = INPUT_STRING;
    print_r(fillSpaces($inputString) . "\n");
?>