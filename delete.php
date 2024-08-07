<?php
$pageTitle = "Delete Post";
$postid = $_GET['postid'];
$postTitle = $_GET['postTitle'];
include("header.php");
$alert = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['deleteConf'] == 'y') {
    $query = "DELETE FROM posts WHERE postid = '$postid'";
    $result = mysqli_query($dbc, $query);

    if ($result) {
        $confirmation = "Your post has been deleted.";
    } else {
        $alert = "Sorry, an error occured. Please try again later.";
    }
} elseif ($_POST['deleteConf'] != 'y' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $alert = "- Please Confirm Before You Delete";
} 

?>


<?php
if (isset($confirmation)){
    echo "<h2>Your post has been deleted.</h2>";
    echo "<a href=\"featured.php\"><h3>Back to featured airports?</h3></a>";
} else {
    echo "<h2>Delete Post</h2>";
    include ("deleteForm.php");
}

?>



<?php include("footer.php");?>