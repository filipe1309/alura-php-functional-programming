<?php

// Curried
function dividir($a, $b)
{
    return $a / $b;
}

// High Order Function
// Curried
function dividirPor(int $divisor)
{
    return function ($numero) use ($divisor) {
        return dividir($numero, $divisor);
    };
}

// Partial application
$dividirPor2Func = dividirPor(2);

echo $dividirPor2Func(4) . PHP_EOL;
echo $dividirPor2Func(5) . PHP_EOL;
echo $dividirPor2Func(10) . PHP_EOL;
