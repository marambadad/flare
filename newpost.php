<?php
    $iatacode = $_GET['iatacode'];
    $pageTitle = "New $iatacode Post";
    include ("header.php");
    $iatacode = $_GET['iatacode'];

    // Checking if POST for each field
    if (isset($_POST['displayName'])) {
        $displayName = mysqli_real_escape_string($dbc, trim($_POST['displayName']));
    } else {
        $displayName = "";
    }

    if (isset($_POST['postTitle'])) {
        $postTitle = mysqli_real_escape_string($dbc, trim($_POST['postTitle']));
    } else {
        $postTitle = "";
    }

    if (isset($_POST['postBody'])) {
        $postBody = mysqli_real_escape_string($dbc, trim($_POST['postBody']));
    } else {
        $postBody = "";
    }

    // Insert into Database 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $query = "INSERT INTO posts (postid, iatacode, displayName, postTitle, postBody, postTimestamp) VALUES (NULL, '$iatacode', '$displayName', '$postTitle', '$postBody', NOW())";

        $result = mysqli_query($dbc, $query);
        if ($result) {
            $confirmation = "Your post was successful!";
        } else {
            echo "<b>FAILED</b>: SQL ERROR: " . mysqli_error($dbc);
        }
}

if (isset($confirmation)){
    echo "<h2>$confirmation</h2>";
    echo "<a href=\"airportfeed.php?iatacode=$iatacode\"><h3>See your $iatacode post?</h3></a>";
} else {
    echo "<h2>New Post</h2>";
    include ("newpostForm.php");
}

include ("footer.php"); ?>