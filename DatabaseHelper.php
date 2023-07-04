<?php

require "./Connection.php";

class DatabaseHelper
{


  private static Connection $connection;

  public static function getConnection(): Connection
  {
    global $connection;

    if ($connection == null) {
      return $connection = new Connection("localhost", "root", "root");
    }
    return $connection;
  }

}

?>