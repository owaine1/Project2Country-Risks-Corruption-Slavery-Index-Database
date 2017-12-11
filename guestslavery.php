<?php
session_start();
if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
include('partials/standardheadcontent.php');
?>
<!-- TODO need to link up table from mySQL -->
<h1 class="jumbotron">Guest Slavery Database</h1>
<p>Need to hook up from mySQL</p>
