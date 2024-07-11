<?php

include "./data.php";

dd($newData);
// Array
// (
//     [0] => Array
//         (
//             [id] => 1
//             [name] => amy
//             [mobile] => 0911-111-111
//         )

//     [1] => Array
//         (
//             [id] => 2
//             [name] => bob
//             [mobile] => 0922-222-222
//         )

//     [2] => Array
//         (
//             [id] => 3
//             [name] => cat
//             [mobile] => 0933-333-333
//         )

// )
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
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>rank</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newData as $key => $value) : ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['mobile'] ?></td>
                        <td><?= $value['rank'] ?></td>
                    </tr>
                <?php endforeach; ?>



            </tbody>
        </table>
    </div>

    <script>

    </script>
</body>

</html>