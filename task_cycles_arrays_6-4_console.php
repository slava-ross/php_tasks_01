<?php
//    const INPUT_STRING = "Ведомость расходов АМОУ ДОД ДШИ-2 за Октябрь 2022";
    const INPUT_STRING = "а б в г д е ё ж з и й к л м н о п р с т у ф х ц ч ш щ ъ ы ь э ю я";

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
        "ь" => " ",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",

/*        "А" => "А",
        "Б" => "B",
        "В" => "V",
        "Г" => "G",
        "Д" => "D",
        "Е" => "E",
        "Ё" => "YO",
        "Ж" => "ZH",
        "З" => "Z",
        "И" => "I",
        "Й" => "J",
        "К" => "K",
        "Л" => "L",
        "М" => "M",
        "Н" => "N",
        "О" => "O",
        "П" => "P",
        "Р" => "R",
        "С" => "S",
        "Т" => "T",
        "У" => "U",
        "Ф" => "F",
        "Х" => "KH",
        "Ц" => "TS",
        "Ч" => "CH",
        "Ш" => "SH",
        "Щ" => "SHCH",
        "Ъ" => "IE",
        "Ы" => "Y",
        "Ь" => "",
        "Э" => "E",
        "Ю" => "YU",
        "Я" => "YA",*/
    );


    function translitRusEng($rusStr, $table) {
//        $rusStr = mb_strtolower($rusStr);
        print_r($rusStr."\n");
        foreach (array_keys($table) as $value) {
            echo $value . " ";
        }
        echo "\n";
        foreach (array_values($table) as $value) {
            echo $value . " ";
        }
        echo "\n";

        return str_ireplace(array_keys($table), array_values($table), $rusStr);
    }

    $rusInputString = INPUT_STRING;
    echo translitRusEng($rusInputString, $translitTable) . "\n";
?>