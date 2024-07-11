<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// $data = $_POST;
$data = $_GET;

// echo json_encode($data);


// Array
// (
//     [name] => fdsfd
//     [mobile] => fsdfdsfdsfds
// )

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db55688";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$sql = "INSERT INTO `students` (`id`, `name`, `mobile`) VALUES (NULL, '{$data["name"]}', '{$data["mobile"]}');";
$conn->exec($sql);

$msg = [
    'data' => $data,
    'result' => 'ok'
];

echo json_encode($msg);



// header("Location: ./s20240708_01_index.php");
