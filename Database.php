<?php
abstract class Database {
  protected $servername = 'localhost';
  protected $username = 'root';
  protected $password = ''; # Sua senha
  protected $database = 'school';


  public function connect() {
    try {
      $connection = new mysqli($this -> servername, $this -> username, $this -> password, $this -> database);
      return $connection;
    } catch (mysqli_sql_exception $e) {
      throw $e;
    }
  }
}
