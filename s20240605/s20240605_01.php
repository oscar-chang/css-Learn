
<style>
    span {
        color: gray;
    }
    b {
        font-size: 18px;
    }
    .msg {
        color: blue;
        width: 50%;
    }
    .reduction-price {
        color: red;
    }
</style>

<?php
function dd($data)
{
    echo "<pre><span>";
    print_r($data);
    echo "</span></pre>";
}

// function dd($var) {
//     var_dump($var);
//     die();
// }

class Camera
{
    // Properties
    public $name;

    public function __construct($product){
        // $name = '';
        echo "<h1>$product</h1> <br>";  // 初始值設定
    }

    // Methods 介紹資訊
    public function intro(){
        $nowName = $this->name ;
        $nowModel = $this->model;
        $introText = "★品項: <b>$nowName</b> - 型號: $nowModel";
        
        echo "$introText  <br><br>";
        // return $introText;
    }

    // 銷售資訊
    public function sell($price,$reductionPrice){
        $nowName = $this->name ;
        $nowModel = $this->model;
        $result = "★ <b>$nowName - $nowModel</b> <br>建議售價為:NT.$ $price / <div class='reduction-price'> 特價:NT.$ $reductionPrice </div>";
        
        // if($nowModel == "D750"){
            
        // }else if($nowModel == "EOS R8"){
            
        // }else{
            
        // }

        switch ($nowModel) {
            case 'D750':
                $msg = "D750是Nikon FX 格式型號中最小巧輕盈的一款，擁有2430 萬像素、EXPEED 4 影像處理引擎，可傾斜的LCD 螢幕令攝影體驗更便利，而內置Wi-Fi 功能則可讓使用者即時與行動裝置連線分享。 對面旅途各種不同環境天候，它有強化機身防滴防塵。 單機身的售價不高，是一台C/P值高的全幅單眼相機";
                break;
            case 'EOS R8':
                $msg = "EOS R8是最輕的全片幅EOS R無反光鏡相機，機身重量只有461g，具備先進EOS iTR AF X主體辨識及自動對焦追蹤、電子快門提供最高40 FPS連拍及支援無裁切4K 60p短片，以輕巧機身及卓越的性能滿足首次購買全片幅相機的攝影愛好者及內容創作者攝影及錄影的需求。";
                break;
            default:
                $msg = "尚無該型號資料";
                break;
        }

        echo "$result <br><div class='msg'> $msg </div><br>";
        // return $introText;
    }
}


$nikon = new Camera('全幅機');  // 創建一個新的 Camera 類的實例，並將其賦值給變數 $nikon
$nikon->name = 'Nikon'; // 設置 $nikon 對象的 name 屬性為 'nikon'。
$nikon->model = 'D750'; // 設置 $nikon 對象的 model 屬性為 'D750'。
// $nikon->aaa = 'D750';
dd($nikon);
$nikon->intro();
$nikon->sell(39000,35000);


$canon = new Camera('全幅機');  // 創建一個新的 Camera 類的實例，並將其賦值給變數 $canon
$canon->name = 'Canon'; // 設置 $canon 對象的 name 屬性為 'canon'。
$canon->model = 'EOS R8'; // 設置 $canon 對象的 model 屬性為 'EOS R8'。
dd($canon);
$canon->intro(); // 調用 $canon 對象的 intro 方法，通常是用來輸出或處理該相機的信息。
$canon->sell(41900,37000);

?>