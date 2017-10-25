<?php
session_start();

require_once('../common/connection.php');
require_once('../common/logger.php');
sleep('1'); // mimic a 'real'server, kinda...

$db = new DbConnect($app_user, $app_pass);
// $db = new DbConnect($app_user, $app_pass, $app_role );

$user_name = $_GET['user'];
$user_pass = md5($_GET['pass']);
// $user_role = ($_GET['role']);

logger($user_name . $user_pass);
// logger($user_name . $user_pass . user_role);


// $sql = "SELECT * FROM users WHERE user = '$user_name' && password = '$user_pass'";
// $result = $db->conn->query($sql);
// TODO below need to add some role code???
$stmt = $db->conn->prepare("SELECT * FROM users WHERE user_name = :user_name && user_password = :user_password");
$stmt->bindParam(':user_name', $user_name);
$stmt->bindParam(':user_password', $user_pass);
$stmt->execute();

if ($stmt->rowCount() == 1) {
  logger("user is registered");
  $_SESSION['logged_in'] = true;
  logger($_SESSION);
echo "logged in";

}else {
  //logger($db->conn->error);
  header('Location: index.php');
  echo 'sorry - you must be logged in';
}
