<?php
require_once 'food.php'; 
require_once 'topping.php'; 
require_once 'discount.php'; 
require_once 'order.php'; 


$makanan= new makanan;
echo $makanan->makanan(). "\n";

$topping = new topping;
echo $topping->topping(). "\n";

$discount= new discount;
echo $discount->discount(). "\n";

$order = new order;
echo $order->order(). "\n";