<?php
// 設定資料庫連線參數
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
$username = 'root';
$password = '';

try {
    // 建立 PDO 物件
    $pdo = new PDO($dsn, $username, $password);
    // 設定 PDO 錯誤模式
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 查詢數據
    $stmt = $pdo->query('SELECT id, name, mobile, price FROM stores');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // print_r($data);
    // 返回 JSON 格式數據
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    // 若發生錯誤，則輸出錯誤訊息
    echo '連線失敗: ' . $e->getMessage();
}
?>
