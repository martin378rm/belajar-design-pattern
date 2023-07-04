<?php



class OrderDetailService
{


  public function save(string $orderId, string $product): void
  {
    DatabaseHelper::getConnection()->sql("INSERT INTO DATABASE2");

  }
}


?>