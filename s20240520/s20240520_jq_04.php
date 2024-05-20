<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .content {
            width: 50%;
            margin: 0 auto;
        }

        #title {
            font-weight: 900;
            font-size: x-large;
        }

        .title {
            text-align: center;
        }

        table {
            border-style: groove;
            border-width: 1px;
            border-color: black;
            border-collapse: collapse;
        }

        tr {}

        td {
            padding: 20px;
            border-style: groove;
        }

        .id {
            width: 200px;
        }

        .name {
            width: 200px;
        }

        .pic {
            width: 200px;
        }

        .price {
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>純HTML</h1>
        <table>
            <tr id="title">
                <td class="id title">Id</td>
                <td class="name title">Name</td>
                <td class="pic title">Pic</td>
                <td class="price title">Price</td>
            </tr>
            <tr>
                <td>1</td>
                <td>魯夫</td>
                <td><img src="img/01.png" alt=""></td>
                <td>$1500000000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>索龍</td>
                <td><img src="img/02.png" alt=""></td>
                <td>$320000000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>橋巴</td>
                <td><img src="img/03.png" alt=""></td>
                <td>$100</td>
            </tr>
        </table>
        
            <h1>HTML+PHP</h1>
            <?php 
                $datas = [
                    [
                        'id' => 1,
                        'name' => '魯夫',
                        'pic' => '01.png',
                        'price' => 1500000000
                    ],
                    [
                        'id' => 2,
                        'name' => '索龍',
                        'pic' => '02.png',
                        'price' => 320000000
                    ],
                    [
                        'id' => 3,
                        'name' => '橋巴',
                        'pic' => '03.png',
                        'price' => 100
                    ]
                ];
            ?>
        
            <table>
            <tr id="title">
                <td class="id title">Id</td>
                <td class="name title">Name</td>
                <td class="pic title">Pic</td>
                <td class="price title">Price</td>
            </tr>
            <?php                 
                foreach ($datas as $data) {
                    echo "<tr>";
                    echo "<td>";
                    echo "{$data['id']}";
                    echo "</td>";
                    echo "<td>";
                    echo "{$data['name']}";
                    echo "</td>";
                    echo "<td>";
                    echo "<img src='img/{$data['pic']}'>";
                    echo "</td>";
                    echo "<td>";
                    echo "{$data['price']}";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
            </table>
            
            <h1>HTML+PHP+SQL</h1>
            <table>
            <tr id="title">
                <td class="id title">Id</td>
                <td class="name title">Name</td>
                <td class="pic title">Pic</td>
                <td class="price title">Price</td>
            </tr>
                <?php 
                    // 設定 MySQL 的連線資訊並開啟連線
                    // 資料庫位置、使用者名稱、使用者密碼、資料庫名稱
                    $link = mysqli_connect("localhost", "oscar", "oscar", "bounty");
                    $link -> set_charset("UTF8"); // 設定語系避免亂碼

                    // SQL 指令
                    $result = $link -> query("SELECT * FROM `member` order by price ASC");
                    while ($row = $result->fetch_assoc()) // 當該指令執行有回傳
                    {
                        $output[] = $row; // 就逐項將回傳的東西放到陣列中
                    }

                    // 將資料陣列轉成 Json 並顯示在網頁上，並要求不把中文編成 UNICODE
                    // print(json_encode($output, JSON_UNESCAPED_UNICODE));
                    // $link -> close(); // 關閉資料庫連線
                ?>
                <?php 
                    foreach ($output as $data) {
                        echo "<tr>";
                        echo "<td>";
                        echo "{$data['id']}";
                        echo "</td>";
                        echo "<td>";
                        echo "{$data['name']}";
                        echo "</td>";
                        echo "<td>";
                        echo "<img src='img/{$data['pic']}'>";
                        echo "</td>";
                        echo "<td>";
                        echo "{$data['price']}";
                        echo "</td>";
                        echo "</tr>";
                    }

                    $link -> close(); // 關閉資料庫連線
                ?>
            </table>

            <h1>AJAX</h1>
            <table>
            <tr id="title">
                <td class="id title">Id</td>
                <td class="name title">Name</td>
                <td class="pic title">Pic</td>
                <td class="price title">Price</td>
            </tr>
            <tr>
                <td class="test_id"></td>
                <td class="test_name"></td>
                <td class="test_pic"></td>
                <td class="test_price"></td>
            </tr>
                <?php 
                    // foreach ($data as $value) {
                    //     echo "<tr>";
                    //     echo "<td>";
                    //     echo "{$value['id']}";
                    //     echo "</td>";
                    //     echo "<td>";
                    //     echo "{$value['name']}";
                    //     echo "</td>";
                    //     echo "<td>";
                    //     echo "<img src='img/{$value['pic']}'>";
                    //     echo "</td>";
                    //     echo "<td>";
                    //     echo "{$value['price']}";
                    //     echo "</td>";
                    //     echo "</tr>";
                    // }
                ?>
            </table>
    </div>

    <script>
        // 方法一
        $(document).ready(function() {

            $.ajax({
                type: "post",
                url: './s20240520_jq_04_Data.php',
                // data: 'data',
                dataType: "json",
                success: function (res) {
                    console.log('res:',res);
                    $(".test_id").text(res[0].id);
                    $(".test_price").text(res[0].price);
                    $(".test_name").text(res[0].name);
                    let pic = '<img src="img/'+res[0].pic+'" alt="">';
                    $(".test_pic").html(pic);
                    
                }
            })
        });
    </script>
</body>

</html>