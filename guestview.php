<?php
session_start();
//TODO need to populate this with a table
//TODO may delete as looks as an earlier version in prototyping

if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
 include('partials/head.php'); ?>

<h1>For guest and admin login and rights</h1>
<p>Contents likely to be users</p>
<p>should only be able to see this page if you are a guest logged in</p>
