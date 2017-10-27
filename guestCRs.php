<?php
session_start();
if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
 include('partials/head_guestcountryrisks.php'); ?>
 <!DOCTYPE html>
 <html lang="en">
<h1 class="panel panel-danger well-lg">***** Restricted Access *****</h1>
<p>You should only be able to see this page if you are logged in</p>
<p>Contents for: admin and partial content for guests</p>
<table class="table">
  <thead>
    <tr class="textTop">
      <th>Country Id</th>
      <th>Country</th>
      <th>Band</th>
      <th>Confidence</th>
      <th>Social&nbsp;Protections Risk&nbsp;Index 40%</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
</html>
