<?php
require_once 'Student.php';

$student = new Student();
$student -> read($_POST['id']);
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form action="index.php" method="post" class="form-inline my-3">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?= $student['id']; ?>">
        <input type="text" name="name" placeholder="<?= $student['name']; ?>" class="form-control mx-1">
        <button class="btn btn-warning mx-1">Atualizar</button>
      </form>
    </div>
  </body>
</html>
