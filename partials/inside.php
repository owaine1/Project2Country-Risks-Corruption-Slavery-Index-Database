<?php
<div id="inside">
  <p>You are logged in!</p>
  <button id="logout">logout</button>
  <!-- now show only logged in stuff! -->

  <nav class="navbar navbar-default">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">&#9776;</button>
<div id="myNavbar" class="collapse navbar-collapse">
   <ul class="nav navbar-nav">
     <li class="active"><a href="index.php">Home</a></li><!-- all -->
     <li><a href="users.php">Users</a></li><!-- admin -->
     <li><a href="countryrisks.php">Country Risks</a></li><!--  admin + contributor -->
     <li><a href="guestcountryrisks.php">Country Risks (guest)</a></li><!-- guests -->

     <li><a href="government.php">Government</a></li><!--  admin + contributor -->
     <li><a href="corruption.php">Corruption</a></li><!-- admin + contributor -->
     <li><a href="guestslavery.php">Slavery (guest)</a></li><!-- guest -->

     <li><a href="slavery.php">Slavery</a></li><!-- admin + contributor -->
     <li><a href="guestslavery.php">Slavery (guest)</a></li><!-- guest -->

   </ul>
 </div>
</nav>
</div>

if (!$_SESSION['logged_in'] || $_SESSION['role'] == 'guest' || 'contributor'){
  header("Location:index.php");
}

// This code is copied from https://stackoverflow.com/questions/20711891/php-easier-way-to-hide-show-menu-items-to-logged-in-logged-out-users

<ul class="nav navbar-nav">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="retailers.php">Stores</a></li>
  <li><a href="coupons.php">Coupons</a></li>
  <?php
  if($_SESSION["loggedIn"] == "yes") {
      echo '<li><a href="myaccount.php">My Account</a></li>';
  }
  ?><li><a href="featured.php">Featured Offers</a></li>
  <li><a href="howitworks.php">How It Works</a></li>
  <li><a href="help.php">Help</a></li>
  <?php
  if($_SESSION["loggedIn"] == "yes") {
      echo '<li><a href="myfavorites.php">My Favorite Stores</a></li>';
  }
  ?>

</ul>
?>
