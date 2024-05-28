<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        'id' => 1,
        'name' => 'amy',
        'mobile' => '0911-111-111'
    ],
    [
        'id' => 2,
        'name' => 'bob',
        'mobile' => '0922-221-222'
    ],
    [
        'id' => 3,
        'name' => 'cat',
        'mobile' => '0933-331-333'
    ],
];

// dd($data);
echo json_encode($data);
