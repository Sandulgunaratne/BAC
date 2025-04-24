<style>
  body { font-family: Arial; background: #f9f9f9; padding: 30px; }
  .container {
    background: white; padding: 20px; width: 400px; margin: auto;
    border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);
  }
  a {
    display: block; margin-top: 10px; text-decoration: none; color: #007BFF;
  }
  .banner {
    background-color: #ff5722;
    color: white;
    padding: 10px;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 5px;
  }
</style>
<div class="container">
<?php
include("users.php");

$id = $_GET['id'];

// Show banner only if accessing someone else's profile
if ($id != "1") {
  echo "<div class='banner'>Congratulations, you solved the lab!</div>";
}

if (isset($users[$id])) {
  echo "<h2>Welcome " . $users[$id]['name'] . "</h2>";
  echo "<p>Balance: " . $users[$id]['balance'] . "</p>";
  echo "<p>Account Number: " . $users[$id]['Account'] . "</p>";
  echo "<a href='profile.php?id=1'>Your Profile</a>";
 
} else {
  echo "<p>Invalid user ID.</p>";
}
?>
</div>
