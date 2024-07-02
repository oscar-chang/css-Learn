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
        'chinese' => 71,
        'english' => 88,
        'math' => 73,
    ],
    [
        'id' => 2,
        'name' => 'Bob',
        'chinese' => 81,
        'english' => 82,
        'math' => 83,
    ],
    [
        'id' => 3,
        'name' => 'Cat',
        'chinese' => 91,
        'english' => 92,
        'math' => 93,
    ],
];
// dd($data);

$newData = $data;

foreach ($newData as $key => $value) {
    $tmpSum = 0;
    $tmpAvg = 0;
    $tmpSum = $value['chinese'] + $value['english'] + $value['math'];
    $tmpAvg = round(($tmpSum / 3), 2);

    $newData[$key]['sum'] = $tmpSum;
    $newData[$key]['avg'] = $tmpAvg;
}
// dd($newData);


// dd($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>Student Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>國文</th>
                    <th>英文</th>
                    <th>數學</th>
                    <th>sum</th>
                    <th>avg</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newData as $key => $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['chinese'] ?></td>
                        <td><?= $value['english'] ?></td>
                        <td><?= $value['math'] ?></td>
                        <td><?= $value['sum'] ?></td>
                        <td><?= $value['avg'] ?></td>
                    </tr>
                <?php endforeach; ?>



            </tbody>
        </table>
    </div>

    <script>


    </script>
</body>

</html>