<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";


$product1 = new Product(1, "iphone 01", 2500, 9);
$product2 = new Product(2, "redmi 7", 400, 5);
$product3 = new Product(3, "samsung", 3200, 10);
$product4 = new Product(4, "realme7", 5000, 7);

$cart = new Cart();

$cartItem1 = $cart->addProduct($product1, 3);
$cartItem2 = $product2->addToCart($cart, 1);
echo "Number of items in cart: ";
echo $cart->getTotalQuantity() . "<br>"; 
echo "Total price of items in cart: ";
echo $cart->getTotalSum() . "<br>";

$cartItem2->increaseQuantity();
$cartItem2->decreaseQuantity();

echo "Number of items in cart: ";
echo $cart->getTotalQuantity() . "<br>"; 

echo "Total price of items in cart: ";
echo $cart->getTotalSum() . "<br>";

$cart->removeProduct($product1);

echo "Number of items in cart: ";
echo $cart->getTotalQuantity();

