<?php

$coseACaso = [
    'ciao' => 5,
    4 => 33,
    1 => [
        'ciao', 'a',
        'tutti',
    ],
    2 => [1, 2],
    3 => [
        1,
        2,
        3,
        4,
    ],
    8 => new stdClass(),
];
class A
{
    public function ciao()
    {
        echo 'ciao';

        return 1;
    }

    public function aoic()
    {
        return 4;
    }
}
function x()
{
    echo '2';
}

function sum(int $a, float $b): int
{
    return $a + $b;
}

echo sum(1.4, '2');
echo "\n";
