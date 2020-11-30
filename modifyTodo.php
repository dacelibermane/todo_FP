<?php
session_start();
require_once __DIR__ . "/helpers/database-wrapper.php";



if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $sql = "SELECT * FROM todos WHERE id=$id";
  $todo = DB::run($sql)->fetch_assoc();
  $_SESSION['message'] = "Your todo has been updated!";
  $_SESSION['msg_type'] = "success";
}

if (!empty($_POST["title"])) {
  $title = $_POST["title"];
  $id = $_POST["id"];
  $updateSql = "UPDATE todos SET title='$title' WHERE id=$id";

  DB::run($updateSql);
  Header("Location: /todo_FP/todo_FP/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/index.js"></script>
</head>

<body>

  <main class="main-todo">
    <div class="add-todo">
      <form action="modifyTodo.php" method="POST">
        <input name="title" id="todoInput" autocomplete="off" value="<?= $todo['title'] ?>">
        <input type="hidden" name="id" value=" <?= $todo["id"] ?>">
        <button type="submit" name="save" id="updateBtn">Update</button>
      </form>

</body>

</html>