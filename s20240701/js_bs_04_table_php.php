<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


// $data = sql -> select fetchAll
$data = [
    [
        'id' => 1,
        'name' => '台北店',
        'mobile' => '0911-111-111',
        'price' => '10000'
    ],
    [
        'id' => 2,
        'name' => '台中店',
        'mobile' => '0922-222-222',
        'price' => '50000'
    ],
    [
        'id' => 3,
        'name' => '高雄店',
        'mobile' => '0933-333-333',
        'price' => '100000'
    ],
];

dd($data);

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
        <h2>Store Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach $data php -->
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['mobile'] ?></td>
                        <td><?= $value['price'] ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>


    </script>
</body>

</html>