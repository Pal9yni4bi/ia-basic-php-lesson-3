<?php

do {
    $i = rand(0, 10); // присваиваем переменной $i случайное число от 0 до 10
    echo $i . '<br>'; // выводим сгенерированное число
} while ($i != 10); // если сгенерированное число оказалось равно 10 - прерываем цикл