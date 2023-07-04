<?php

require "./DatabaseHelper.php";

class OrderService
{

  public function save(string $string): void
  {
    DatabaseHelper::getConnection()->sql("INSERT INTO DATABASE .....");
  }

}


?>