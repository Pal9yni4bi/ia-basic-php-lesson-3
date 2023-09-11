<?php

$counter = 1;
while ($counter < 6) {
    echo $counter . '<br>'; // выводим значение счётчика на экран и переносим строку

    if ($counter % 2 === 0) {
        echo 'При умножении ' . $counter . ' на 7 получим ' . ($counter * 7) . '<br>';
    }

    $counter = $counter + 1; // увеличиваем значение счётчика на 1
}