<?php
$pageTitle = "Update Post";
$postid = $_GET['postid'];
include("header.php");

// Update Post Query
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // Variable Declarations
     $updateDisplayName = $_POST['displayName'];
     $updatePostTitle = $_POST['postTitle'];
     $updatePostBody = $_POST['postBody'];

     $updateQuery = "UPDATE posts SET displayName='$updateDisplayName',postTitle='$updatePostTitle', postBody='$updatePostBody' WHERE postid = '$postid'";
     
     // Updating Database
     $updateResult = mysqli_query($dbc, $updateQuery);
     if ($updateResult) {
          $confirmation = "Your post was updated.";
     }
     else {
          $alert = "Something went wrong. Please try again later.";
     }
}

// Query to db
$selectQuery = "SELECT * FROM posts WHERE postid = '$postid'";
$selectResult = mysqli_fetch_array(mysqli_query($dbc, $selectQuery));

// Setting Return Variables
$displayName = $selectResult['displayName'];
$postTitle = $selectResult['postTitle'];
$postBody = $selectResult['postBody'];
$iatacode = $selectResult['iatacode'];

if (isset($confirmation)) {
     echo "<h2>$confirmation</h2>";
     echo "<a href=\"airportfeed.php?iatacode=$iatacode\"><h3>Back to $iatacode?</h3</a>";
} else {
     echo "<h2>Edit Post</h2>";
     include ("updateForm.php");
}

include ("footer.php"); ?>