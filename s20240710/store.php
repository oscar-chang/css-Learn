<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// $data = $_POST;
$data = $_GET;


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


header("Location: ./s20240708_01_index.php");
