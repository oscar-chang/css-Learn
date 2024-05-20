<?php 

    function dd($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    $data = [
        [
            'id' => 1,
            'name' => '★魯夫',
            'pic' => '01.png',
            'price' => 1500000000
        ],
        [
            'id' => 2,
            'name' => '★索龍',
            'pic' => '02.png',
            'price' => 320000000
        ],
        [
            'id' => 3,
            'name' => '★橋巴',
            'pic' => '03.png',
            'price' => 100
        ]
    ];
    // dd($data);

    echo json_encode($data);
?>