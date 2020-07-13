<?php

    const INPUT_STRING = "Ведомость расходов АМОУ ДОД ДШИ-2 за Октябрь 2022";

    $translitTable = array(
        "a" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "j",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "kh",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "shch",
        "ъ" => "ie",
        "ы" => "y",
        "ь" => "",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
    );

    function urlForming($inputStr, $rusTable) {
        $inputStr = mb_strtolower($inputStr);
        $urlString = "";
        for ($index = 0; $index < mb_strlen($inputStr); $index++) {
            $currentSymbol = mb_substr($inputStr, $index, 1);
            if (array_key_exists($currentSymbol, $rusTable)) {
                $urlString .= $rusTable[$currentSymbol];
            }
            elseif ($currentSymbol === ' ') {
                $urlString .= '_';
            }
            else {
                $urlString .= $currentSymbol;
            }
        }
        return $urlString;
    }

    $inputString = INPUT_STRING;
    print_r(urlForming($inputString, $translitTable) . "\n");
?>