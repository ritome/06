<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

use PhpParser\Node\Stmt\Echo_;
use SebastianBergmann\CodeCoverage\Report\Xml\BuildInformation;

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($name,$number,$color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }



    public function infomation() {
        return '車の車種: ' . $this->name . '、' . '車体番号:' . $this->number . '、' . 'カラー:' . $this->color  . 'です。<br>';
        
    }


}

// 以下にCarクラスを継承したTaxiクラスを記述して下さい
class Taxi extends Car
{
    public $passenger;
}
$car = new Taxi('クラウンのタクシー');
$car->infomation();  







/*class Taxi extends Car  
{   
    public $passenger; 
    public $pickup;
    public $lower;

    public function __construct($passenger)
    {
        $this->passenger = $passenger;
    }
    
    public function __construct($pickup,$lower)
    {
        $this->pickUp = $pickup();
        $this->lower = $lower();
    }   

    public function infomation() 
    {
        parent::infomation();
        echo '乗車人数は' . $this->pickup . '人です' . '<br>' . '<hr>';
        if ($) {
            # code...
        }
        }
        
    }
}          


class Taxi extends Car
{
    // クラスを宣言しただけ
}
$car = new Taxi('クラウンのタクシー');
$car->selfIntroduction();  





// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);



