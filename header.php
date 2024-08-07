<?php include('mysqli_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <title><?php echo "Flare - $pageTitle" ?></title>
</head>

<body class="background">
  <div class="content">
  <div id="splash">
    <h1>Flare - Your Travel Companion</h1>
  </div>
<nav>
  <ul>
    <li><a href="index.php" <?php if ($pageTitle == "Home") {echo "class=\"active\"";} ?>>Home</a></li>
    <li><a href="featured.php"<?php if ($pageTitle == "Airports" || isset($_GET['iatacode'])) {echo "class=\"active\"";} ?>>Airports</a></li>
    <li><a href="airlines.php" <?php if ($pageTitle == "Airlines") {echo "class=\"active\"";} ?>>Airlines</a></li>
    <li><a href="about.php"<?php if ($pageTitle == "About") {echo "class=\"active\"";} ?>>About</a></li>
    <li style="float:right;"><a href="login.php"<?php if ($pageTitle == "Login") {echo "class=\"active\"";} ?>>Login</a></li>
  </ul>
</nav>