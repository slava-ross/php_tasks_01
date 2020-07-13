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

    function translitRusEng($rusStr, $table) {
        $rusStr = mb_strtolower($rusStr);
        $engStr = "";
        for ($index = 0; $index < mb_strlen($rusStr); $index++) {
            $currentSymbol = mb_substr($rusStr, $index, 1);
            if (array_key_exists($currentSymbol, $table)) {
                $engStr .= $table[$currentSymbol];
            }
            else {
                $engStr .= $currentSymbol;
            }
        }
        return $engStr;
    }

    $rusInputString = INPUT_STRING;
    print_r(translitRusEng($rusInputString, $translitTable) . "\n");
?>