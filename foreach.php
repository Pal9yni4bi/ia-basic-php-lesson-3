<?php

$someArray = [
    'first',
    'second',
    'third',
    'forth',
    'fifth',
];

foreach ($someArray as $key => $item) {
    echo 'Под индексом ' . $key . ' находится элемент ' . $item . '<br>';
}