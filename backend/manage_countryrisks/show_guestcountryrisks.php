<?php
// TODO all ripped from show_users, to modify ???
require_once('../common/connection.php');

$db = new DbConnect($app_user, $app_pass);

$stmt = $db->conn->prepare("SELECT * FROM guestCRs");
// $stmt->bindParam(':user_name', $user_name); e.g. of scrubbed parameter to stop sql injection

$stmt->execute();

  if ($stmt->rowCount() > 0) {
    logger("countryrisks rows have been sent back from mysql");
    $output = $stmt->fetchAll();
    echo json_encode($output);
    } else {
    logger($user->conn->error);
    // do false stuff
  }
