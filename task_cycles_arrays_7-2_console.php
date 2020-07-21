<?php
    const INPUT_STRING = "Ведомость расходов АМОУ ДОД ДШИ-2 за Октябрь 2022";

    function fillSpaces($inputStr) {
        return str_ireplace(" ", "_", $inputStr);
    }

    $inputString = INPUT_STRING;
    print_r(fillSpaces($inputString) . "\n");
?>