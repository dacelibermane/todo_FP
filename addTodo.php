<?php

session_start();
require_once __DIR__ . "/helpers/database-wrapper.php";


if (!empty($_POST['title'])) {
  $title = $_POST['title'];
  $addSql = "INSERT INTO todos (title) VALUES ('$title')";
  DB::run($addSql);
  $_SESSION['message'] = "Your todo has been saved!";
  $_SESSION['msg_type'] = "success";


  Header("Location: index.php");
} else {
  $_SESSION['message'] = "You must enter todo!";
  $_SESSION['msg_type'] = "danger";
  Header("Location: index.php");
}
