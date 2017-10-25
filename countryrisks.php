<?php
session_start();

if (!$_SESSION['logged_in']){
  header("Location:index.php");
}
 include('partials/head_.php'); ?>

<h1>restricted access</h1>
<p>should only be able to see this page if you are logged in</p>
<p>contents for to be admin, contributors and partial content for guests</p>
<table class="table">
  <thead>
    <tr class="textTop">
      <th>Country Id</th>
      <th>Country</th>
      <th>Band</th>
      <th>Confidence</th>
      <th>Social&nbsp;Compliance Risk&nbsp;Index</th>
      <th>Social&nbsp;Vulnerability Risk&nbsp;Index 40%</th>
      <th>Social&nbsp;Prevalence Risk&nbsp;Index 20%</th>
      <th>Social&nbsp;Protections Risk&nbsp;Index 40%</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
