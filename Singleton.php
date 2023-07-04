<?php

/**
 * Summary of Singleton
 * Kelas Singleton mendefinisikan metode `GetInstance` yang berfungsi sebagai
 * alternatif untuk konstruktor dan memungkinkan klien mengakses instance   
 * yang sama dari kelas yang sama berulang kali. 
 */
class Singleton
{

  /**
   * Instance Singleton disimpan dalam sebuah field static. 
   * field ini adalah sebuah array
   * karena kita akan mengizinkan Singleton kita untuk memiliki subkelas. Tiap-tiap item dalam array ini akan menjadi instance dari subkelas Singleton tertentu. Anda akan
   * akan melihat bagaimana cara kerjanya sebentar lagi.
   */
  private static $instances = [];

  /**
   * Konstruktor Singleton harus selalu bersifat privat untuk mencegah pemanggilan langsung, pemanggilan konstruksi dengan keyword `new`.
   */
  private function __construct()
  {
  }

  /**
   * Singleton tidak boleh dikloning
   */
  private function __clone()
  {
  }

  /**
   * Singleton tidak boleh dipulihkan
   */
  public function __wakeup()
  {
    throw new \Exception("Cannot unserialize a singleton.");
  }

  /**
   * Ini adalah metode statis yang mengontrol akses ke instance singleton
   * instance. Pada saat pertama kali dijalankan, metode ini membuat objek tunggal dan menempatkannya
   * ke dalam field static. Pada proses selanjutnya, metode ini mengembalikan  
   * objek yang sudah ada kepada klien
   * objek yang ada yang tersimpan dalam variable $instances .
   *
   * Implementasi ini memungkinkan Anda membuat subkelas dari kelas Singleton dan tetap menyimpan
   * hanya satu contoh dari setiap subkelas.
   */
  public static function getInstance(): Singleton
  {
    $cls = static::class;
    if (!isset(self::$instances[$cls])) {
      self::$instances[$cls] = new static();
    }

    return self::$instances[$cls];
  }

  /**
   * Finally, any singleton should define some business logic, which can be
   * executed on its instance.
   */
  public function someBusinessLogic()
  {
    // ...
  }

}

function clientCode()
{
  $s1 = Singleton::getInstance();
  $s2 = Singleton::getInstance();
  if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
  } else {
    echo "Singleton failed, variables contain different instances.";
  }
}

clientCode();






?>