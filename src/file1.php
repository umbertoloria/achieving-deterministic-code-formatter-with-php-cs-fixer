<?php

$coseACaso = array(
    'ciao' =>  5,
    4 => 33,
    1=> [
        'ciao', 'a',
        'tutti'
    ],
    2=> [1, 2],
    3 => [
        1,
        2,
        3
        ,
        4,
    ],
    8 => new stdClass()
);
class A {
    public function ciao() {
        echo 'ciao';
        return 1;
    }
    public function aoic() {
        $a = 4;
        return$a;
    }
}
function x() {
    echo '2';
}
