<?php

echo 'O quanto você pesa vai dizer o quantidade de água que você deve tomar' . PHP_EOL;

$peso = (int) readline('Quantos kilos você pesa?: ');

$agua = $peso * 35;

echo "Vocẽ deve tomar $agua ml" . PHP_EOL;
