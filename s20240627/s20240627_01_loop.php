<?php


//for
//跑操場
//第1圈 跑10圈 一次跑一圈
// 0 / 1
// <=10 <10
for ($i = 1; $i <= 10; $i++) {
    # code...
}


// while
$i = 1;
while ($i <= 10) {
    $i++;
}

// do while
$i = 1;


// foreach
$myArr = [1, 2, 3];
$myArr = [
    [
        'sn' => 's1',
        'name' => 'amy',
        'mobile' => '0911'

    ],[
        'sn' => 's2',
        'name' => 'bob',
        'mobile' => '0911'

    ],[
        'sn' => 's2',
        'name' => 'cat',
        'mobile' => '0911'

    ],

];
foreach ($variable as $key => $value) {
    echo $value['s1'];
    // 1 2 3
}


// php
// index array
$indexArr = [1,2,3];
// assoc array
$assocArr = [
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat'
];
