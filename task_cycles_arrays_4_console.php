<?php
    $regions = [
        "Московская область" => array(
            "Москва",
            "Зеленоград",
            "Клин",
            "Истра",
            "Балашиха",
            "Жуковский",
            "Лобня",
            "Подольск",
            "Реутов",
            "Серпухов"
        ),
        "Ленинградская область" => array(
            "Санкт-Петербург",
            "Всеволжск",
            "Павловск",
            "Кронштадт",
            "Волхов",
            "Выборг",
            "Гатчина",
            "Тосно",
            "Шлиссельбург"
        ),
        "Рязанская область" => array(
            "Рязань",
            "Касимов",
            "Шацк",
            "Ряжск",
            "Михайлов"
        ),
        "Республика Удмуртия" => array(
            "Ижевск",
            "Воткинск",
            "Глазов",
            "Камбарка",
            "Можга",
            "Сарапул"
        ),
        "Краснодарский край" => array(
            "Краснодар",
            "Анапа",
            "Сочи",
            "Геленджик",
            "Ейск",
            "Крымск",
            "Туапсе",
            "Новороссийск"
        ),
    ];
    foreach ($regions as $region => $cities) {
        echo "$region:\n";
        foreach ($cities as $city) {
            echo "$city, ";
        }
        echo chr(8) . chr(8) . " \n";
    }
?>