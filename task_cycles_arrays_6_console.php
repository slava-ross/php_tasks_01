<?php
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

    function translitRusEng($rusStr) {
        //$rusStr = mb_strtolower($rusStr);
        $engStr = "";
        for ($index = 0; $index < mb_strlen($rusStr); $index++) {
            echo "$rusStr[$index]";
            //$engStr .= translitTable[$rusStr[$index]];
        }
        return $engStr;
    }

    const INPUT_STRING = "Ведомость расходов АМОУ ДОД ДШИ9 за Октябрь 2022";

    $rusInputString = INPUT_STRING;

    print_r(translitRusEng($rusInputString));
?>