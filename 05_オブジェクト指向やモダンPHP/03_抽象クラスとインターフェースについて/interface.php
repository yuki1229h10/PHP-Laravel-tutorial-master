<?php

use Product as GlobalProduct;

ini_set("display_errors", 1);
error_reporting(E_ALL);

// インタフェース 全てメソッドの内容しか書けない
interface ProductInterface
{
  // 変数 関数
  // public function echoProduct()
  // {
  //   echo '親クラスです';
  // }

  public function getProduct();
}

// インタフェース 全てメソッドの内容しか書けない
interface NewsInterface
{
  // 変数 関数
  // public function echoProduct()
  // {
  //   echo '親クラスです';
  // }

  public function getNews();
}

// 具象クラス、親クラス・基底クラス・superクラス
class BaseProduct
{
  // 変数 関数
  public function echoProduct()
  {
    echo '親クラスです';
  }

  // オーバーライド(上書き)
  public function getProduct()
  {
    echo '親の関数です';
  }
}

// 子クラス・派生クラス・subクラス
class Product implements ProductInterface, NewsInterface
{

  // アクセス修飾子, private(外からアクセスできない), protected(自分・継承したクラス), public(公開)

  // 変数
  private $product = [];

  // 関数

  // 初回
  function __construct($product)
  {
    $this->product = $product;
  }

  final public function getProduct()
  {
    echo $this->product;
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }

  public function getNews()
  {
    echo 'news';
  }

  public static function getStaticProduct($str)
  {
    echo $str;
  }
}

$instance = new Product('test');
var_dump($instance);

$instance->getProduct();
echo '<br>';

// 親クラスのメソッド
// $instance->echoProduct();
// echo '<br>';


$instance->addProduct('add');
echo '<br>';

$instance->getProduct();
echo '<br>';

// $instance->getNews();
// echo '<br>';

// 静的(static) クラス名::関数名
Product::getStaticProduct('static');
echo '<br>';
