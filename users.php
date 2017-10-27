<?php
session_start();
//  DONE filter for admin role only
//TODO was totally broken. commented out lines6–7.
// Now everyone has access if type "users.php" into address bar.
// But at least jquery hides the menu selection
/*
if (!$_SESSION['logged_in'] || $_SESSION['role'] == 'guest' || 'contributor'){
  header("Location:index.php");
}
*/
 include('partials/head_users.php'); ?>

<body class="container">
  <?php include('partials/jumbotron.php'); ?>
  <div id="login_div">
    <?php include('partials/outside.php'); ?>
    <?php include('partials/inside.php'); ?>
  </div>
  <div>
    <input id="user_name" class="form-control" type="text">
    <input id="user_password" class="form-control" type="text">
    <button id="create_user" class="btn btn-success">create user</button>
  </div>

<table class="table">
  <thead>
  <tr>
    <th>User&nbsp;Id</th>
    <th>Username</th>
    <th>Role</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  </thead>
  <tbody>

  </tbody>
</table>
</body>

</html>
