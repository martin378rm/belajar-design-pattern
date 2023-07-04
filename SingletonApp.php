<?php
require "./OrderService.php";
require "./OrderDetailService.php";

$orderService = new OrderService();
$orderService->save("0001");

$orderDetailService = new OrderDetailService();
$orderDetailService->save("0001", "Shampoo");
$orderDetailService->save("0001", "Sabun");
$orderDetailService->save("0001", "Sunlight");


function testConnection()
{
  // $connection1 = new Connection("localhost", "root", "root");
  $connection1 = DatabaseHelper::getConnection();
  $connection2 = DatabaseHelper::getConnection();


  if ($connection1 === $connection2) {
    echo "Singleton";
  } else {
    echo "Singleton tidak bekerja";
  }

}

testConnection();

?>