<?php
require_once 'Database.php';

class Student extends Database {
  public function create() {
    $database = $this -> connect();
    $sql = "insert into student(name) values('{$_POST['name']}')";
    $database -> query($sql);
    $database -> close();
  }

  public function readAll() {
    $database = $this -> connect();
    $sql = "select * from student";
    $read = $database -> query($sql);
    $database -> close();

    while($row = mysqli_fetch_array($read)) {
      $class[] = $row;
    }

    if(isset($class)) {
      return $class;
    }
  }

  public function read($id) {
    $database = $this -> connect();
    $sql = "select * from student where id = '{$id}'";
    $read = $database -> query($sql);
    $database -> close();
    $student = mysqli_fetch_assoc($read);
    return $student;
  }

  public function update() {
    $database = $this -> connect();
    $sql = "update student set name = '{$_POST['name']}' where id = '{$_POST['id']}'";
    $database -> query($sql);
    $database -> close();
  }

  public function delete() {
    $database = $this -> connect();
    $sql = "delete from student where id='{$_POST['id']}'";
    $database -> query($sql);
    $database -> close();
  }
}
