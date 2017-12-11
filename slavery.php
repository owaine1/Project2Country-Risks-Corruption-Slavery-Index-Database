<?php
session_start();
//FIXME need to marry-up with table. atm the table shown is for admin / contributors
if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
 include('partials/head_index.php');
 include('partials/inside.php'); ?>

<h1>restricted access</h1>
<p>should only be able to see this page if you are logged in</p>
<p>contents for to be admin, contributors and partial content for guests???</p>
<table class="table">
  <thead>
    <tr class="textTop">
      <th>Country Id</th>
      <th>Country</th>
      <th>Band</th>
      <th>Numbers in Slavery</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
