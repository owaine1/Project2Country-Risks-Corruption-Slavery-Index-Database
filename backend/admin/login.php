<?php
session_start();

require_once('../common/connection.php');
require_once('../common/logger.php');
sleep('1'); // mimic a 'real'server, kinda...

$db = new DbConnect($app_user, $app_pass);
// $db = new DbConnect($app_user, $app_pass, $app_role );

$user_name = $_GET['user'];
$user_pass = md5($_GET['pass']);

logger($user_name . $user_pass);

// $sql = "SELECT * FROM users WHERE user = '$user_name' && password = '$user_pass'";
// $result = $db->conn->query($sql);
$stmt = $db->conn->prepare("SELECT * FROM users WHERE user_name = :user_name && user_password = :user_password");
$stmt->bindParam(':user_name', $user_name);
$stmt->bindParam(':user_password', $user_pass);
$stmt->execute();

if ($stmt->rowCount() == 1) {
  logger("user is registered");
  $role = $stmt->fetch();
  $_SESSION['logged_in'] = true;
  $_SESSION['role'] = $role['role'];
  logger($_SESSION);
  echo json_encode($_SESSION);

}else {
  //logger($db->conn->error);
  header('Location: index.php');
  echo 'sorry - you must be logged in';
}
