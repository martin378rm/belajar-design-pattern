<?php


class Connection
{


  private $host;
  private $username;
  private $password;
  public function __construct($host, $username, $password)
  {
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
  }

  public function sql($query): void
  {
    echo $query . PHP_EOL;
  }

}


?>