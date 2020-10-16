<?php
require_once 'Database.php';

class Student extends Database {
  public function create() {
    $database = $this -> connect();
    $sql = "insert into student(name) values ('{$_POST['name']}')";
    $database -> query($sql);
  }

  public function readAll() {
    $database = $this -> connect();
    $sql = "select * from student";
    $read = $database -> query($sql);

    $students = [];

    while($row = mysqli_fetch_array($read)) {
      $students[] = $row;
    }

    return $students;
  }

  public function read($id) {
    $database = $this -> connect();
    $sql = "select * from student where id = '{$id}'";
    $read = $database -> query($sql);
    $student = mysqli_fetch_assoc($read);
    return $student;
  }

  public function update() {
    $database = $this -> connect();
    $sql = "update student set name = '{$_POST['name']}' where id = '{$_POST['id']}'";
    $database -> query($sql);
  }

  public function delete() {
    $database = $this -> connect();
    $sql = "delete from student where id='{$_POST['id']}'";
    $database -> query($sql);
  }
}
