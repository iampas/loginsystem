<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
<h2>User Authentication System </h2><hr>

<?php include_once './resource/database.php'; ?>

<p>You are not currently logged in.</p>
<p>To login click here <a href="login.php">Login</a>.  <a href="signup.php">Not a member </a></p>

<p>You are currently logged in as {username} <a href="logout.php"> Log Out </a> </p>


</body>
</html>