<?php

use Product as GlobalProduct;

class Product
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

  public function getProduct()
  {
    echo $this->product;
  }

  public function addProduct($item)
  {
    $this->product .= $item;
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

$instance->addProduct('add');
echo '<br>';

$instance->getProduct();
echo '<br>';

// 静的(static) クラス名::関数名
Product::getStaticProduct('static');
echo '<br>';
