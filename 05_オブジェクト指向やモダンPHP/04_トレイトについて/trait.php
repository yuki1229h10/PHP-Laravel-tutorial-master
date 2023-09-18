<?php

use Product as GlobalProduct;

trait ProductTrait
{

  public function getProduct()
  {
    echo 'product';
  }
}

trait NewsTrait
{

  public function getNews()
  {
    echo 'news';
  }
}

class Product
{

  use ProductTrait;
  use NewsTrait;

  public function getInformation()
  {
    echo 'class';
  }

  public function getNews()
  {
    echo 'newClass';
  }
}

$product = new Product();

$product->getInformation();
echo '<br>';
$product->getProduct();
echo '<br>';
$product->getNews();
echo '<br>';
