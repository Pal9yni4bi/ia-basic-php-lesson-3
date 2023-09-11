<?php

$multiplier = 0;

while ($multiplier < 7) {
    echo 'Работаем с множителем ' . ++$multiplier . '<br>';

    $counter = 1;

    while ($counter < 6) {
        echo $counter . '<br>'; // выводим значение счётчика на экран и переносим строку

        if ($counter % 2 === 0) {
            $result = $counter * $multiplier;

            echo 'При умножении ' . $counter . ' на ' . $multiplier . ' получим ' . $result . '<br>';

            if ($result > 20) {
                echo 'Перейдём к следующему множителю.<br>';
                continue 2;
            }
        }

        $counter++; // увеличиваем значение счётчика на 1
    }
}