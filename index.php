<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
Class Car
{
    protected $name;
    protected $number;
    protected $color;

    public function __construct($name, $number, $color)
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



    public function information() 
    {
        echo '車の車種:' . $this->name . '車体番号:' . $this->number . 'カラー:' . $this->color . 'です。';
    }

}

// 以下にCarクラスを継承したTaxiクラスを記述して下さい
Class Taxi extends Car 
{
    private $passenger;

    public function lower($lower)
    {
        if ($this->passenger >= $lower) {
            echo $lower . '人降車しました。';
        }
        else
        {
            echo '降車人数に誤りがあります。';
        }
        $this->passenger -= $lower;
    }

    public function pickUp($pickUp)
    {
        $this->passenger += $pickUp;
        echo '乗車人数は' . $this->passenger . '人です。';
    }
    public function infomation()
    {
        echo '車の車種:' . $this->name . '、車体番号:' . $this->number . '、カラー:' . $this->color . '、';
    }
}

// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->information();
// echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');
// タクシーの情報表示を表示
echo $taxi1->information();
// echo '<br>';

// 3人乗車
$taxi1->pickUp(3);
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);
echo '<br>';
