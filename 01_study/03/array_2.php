<?php

$profile = [
    'Bob',
    21,
    [
    'Tom',
        'Ken',
        'John'
    ]
];

echo $profile[0] . '<br>';

echo $profile[1] . '<br>';

echo $profile[2][0] . '<br>'; // キーが2のデータ自体が配列

echo $profile[2][1] . '<br>';

echo $profile[2][2] . '<br>';