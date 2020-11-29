<?php


require_once __DIR__ . "/helpers/database-wrapper.php";
require_once __DIR__ . "/process.php";

/* atspoguļo datu bāzē esošos ierakstus*/
$sql = "SELECT * FROM todos ORDER BY id DESC";
$todos = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/index.js"></script>
</head>

<body>

  <?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
      <?php echo $_SESSION['message'];
      unset($_SESSION['message']); ?>
    <?php endif ?>
    </div>
    <header>
      <h1><i class="fas fa-clipboard-list"></i>To-Do List</h1>
    </header>

    <main class="main-todo">
      <div class="add-todo">
        <form action="addTodo.php" method="POST">

          <input name="title" id="todoInput" autocomplete="off" placeholder="Enter your todo">
          <button type="submit" id="addBtn" name="save"><i class="fas fa-plus-square"></i>Todo</button>
        </form>
      </div>
      <div class="show-todo">
        <?php foreach ($todos as $todo) { ?>
          <div class="todo-item">
            <div class="edit">
              <a href="/todo_FP/todo_FP/modifyTodo.php?id=<?= $todo["id"] ?>" class="edit-todo"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a></div>
            <div class="delete"></div>
            <a href="/todo_FP/todo_FP/deleteTodo.php?id=<?= $todo["id"] ?>" class="remove-todo">
              <i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
            <input type="checkbox" class="checkbox">
            <h2><?= $todo["title"] ?></h2>
            <small><?= $todo["date"] ?></small>
          </div>
        <?php } ?>
        <div class="show-removed-todo">
          <div id="deleteTodoItem">
            <a href="/todo_FP/todo_FP/deleteTodo.php?id=<?= $todo["id"] ?>" class="delete-todo"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>
            <h2><?= $todo["title"] ?></h2>
          </div>
        </div>
      </div>
    </main>
</body>

</html>