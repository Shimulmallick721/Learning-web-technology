<?php
require_once('../model/userModel.php');
session_start();
$error = "";
if (isset($_POST['login'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Check Username Password and Type again";
  } else {
    $username = $_POST['username'];
    $password = $_POST['password'];
  }
  $connection = new db();
  $conobj = $connection->OpenCon();

  $userQuery = $connection->CheckUser($conobj, "users", $username, $password);

  if ($userQuery->num_rows > 0) {
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
  } else {
    $error = "Check Username Password  again";
  }
  $connection->CloseCon($conobj);
}