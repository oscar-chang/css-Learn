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
    <form action="" method="post">
        <input type="text" name="name" id="" value='kai'>
        <input type="text" name="mobile" id="" value='0911'>
        <input type="text" name="address" id="" value='taipei'>

    </form>
    <?php 
        $data = $_POST;
        // dd($data);
        $data = [
            'name'=>'kai',
            'mobile'=>'0911',
            'address'=>'taipei'
        ];

        foreach ($variable as $key => $value) {
            # code...
        }

       $sql = "INSERT INTO Students ('name', 'mobile', 'address')
        VALUES ('kai', '0911', 'taipei')";
    
       //run $sql
    ?>

    <script>
        let myArr = [1, 2, 3];
        console.log('myArr', myArr);

        let myObject = {
            's1': 'amy',
            's2': 'bob',
            's3': 'cat'
        };
        console.log('myObject', myObject);

    </script>
</body>

</html>