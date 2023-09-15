<?php

class Product
{

  // アクセス修飾子, private(外からアクセスできない), protected(自分・継承したクラス), public(公開)

  // 変数
  private $product = [];

  // 関数
  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    echo $this->product;
  }
}
