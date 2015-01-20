<?php 

class ShoppingCart {

  private $productsInTheCart = array();
  private $productFactory;

  public function __construct() {
    $this->productFactory = new ProductFactory;
  }

  function getProductsInTheCart() {
    return $this->productsInTheCart;
  }

  function add($productId){
    $this->productsInTheCart[] = $this->productFactory->make($productId);
  } 

}