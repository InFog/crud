<?php
require_once 'Student.php';

if(isset($_POST['action'])) {
  if($_POST['action'] == 'create') {
    $create = new Student();
    $create -> create();
  }

  if($_POST['action'] == 'update') {
    $update = new Student();
    $update -> update();
  }

  if($_POST['action'] == 'delete') {
    $delete = new Student();
    $delete -> delete();
  }
}

$class = new Student();
$class -> readAll();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <a href="create.php" class="btn btn-success my-3">Criar</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Configurações</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(isset($class)) {
          foreach($class as $student) {
        ?>
          <tr>
            <td><?= $student['id']; ?></td>
            <td><?= $student['name']; ?></td>
            <td>
              <form action="update.php" method="post" class="d-inline">
                <input type="hidden" name="id" value="<?= $student['id']; ?>" />
                <button class="btn btn-warning my-3">Atualizar</button>
              </form>
              <form action="index.php" method="post" class="d-inline">
                <input type="hidden" name="id" value="<?= $student['id']; ?>">
                <input type="hidden" name="action" value="delete">
                <button class="btn btn-danger my-3">Excluir</button>
              </form>
            </td>
          </tr>
        <?php
          }
        }
        ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
