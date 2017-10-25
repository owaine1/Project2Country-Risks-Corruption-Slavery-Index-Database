<?php
session_start();

if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
 include('partials/head.php'); ?>
<h1>restricted access</h1>
<p>should only be able to see this page if you are logged in</p>
<p>contents likely to be users, for admin login</p>
