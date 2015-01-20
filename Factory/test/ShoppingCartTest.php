<?php

class ShoppingCartTest extends \PHPUnit_Framework_TestCase {

  public function test_add() {
    
    $productIdOne = 'k123';
    $productIdTwo = 'm123';

    $shoppingCart = new ShoppingCart();
    $shoppingCart->add($productIdOne);
    $shoppingCart->add($productIdTwo);

    assertNotEmpty($shoppingCart->getProductsInTheCart(), 'Should be empty $productsInTheCart array'); 
    assertCount(2, $shoppingCart->getProductsInTheCart(), 'Should have 2 items in $productsInTheCart array');
  }

  public function testMouse() {

    $productIdTwo = 'm123';
    $shoppingCart = new ShoppingCart();
    $shoppingCart->add($productIdTwo);
    $items = $shoppingCart->getProductsInTheCart();
    
    assertTrue($items[0] instanceof Product);
    assertTrue($items[0] instanceof Mouse);
  }

  public function testKeyboard() {

    $productIdTwo = 'k123';
    $shoppingCart = new ShoppingCart();
    $shoppingCart->add($productIdTwo);
    $items = $shoppingCart->getProductsInTheCart();

    assertTrue($items[0] instanceof Product);
    assertTrue($items[0] instanceof Keyboard);
  }
}