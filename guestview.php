<?php
session_start();

if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
 include('partials/head.php'); ?>

<h1>For master admin login and rights</h1>
<p>Contents likely to be users</p>
<p>should only be able to see this page if you are a guest logged in</p>
