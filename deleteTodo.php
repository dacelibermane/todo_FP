<?php
session_start();

require_once __DIR__ . "/helpers/database-wrapper.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $deleteSql = "DELETE FROM todos WHERE id=$id";

  DB::run($deleteSql);

  $_SESSION['message'] = "Your Todo has been deleted!";
  $_SESSION['msg_type'] = "danger";
  Header("Location: index.php");
}
