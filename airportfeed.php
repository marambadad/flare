<?php
$iatacode = strtoupper($_GET['iatacode']);
$pageTitle = "$iatacode Guide";
include ("header.php"); ?>
<?php
    // Get active airport info from database
    $iatacode = strtoupper($_GET['iatacode']);
  
    $airportQuery = "SELECT * FROM airports WHERE iatacode = '$iatacode'";
    $airportResult = mysqli_query($dbc,$airportQuery);
    while ($row = mysqli_fetch_array($airportResult,MYSQLI_ASSOC)) {
      $airportName = $row['airportName'];
      $airportDescription = $row['airportDescription'];
      $airportCity = $row['airportCity'];
      $airportRegion = $row['airportRegion'];
      $airportCountry = $row['airportCountry'];
    }

    // Display static airport information from database
    echo "<h2>$iatacode - $airportCity, $airportRegion, $airportCountry</h2>";

    echo "<img src=\"assets/".$iatacode."image.jpg\" class=\"ignorePadding\">";

    echo "<h3>About $airportName</h3>";
    echo "<div id=\"airportDescription\"><p>$airportDescription</p></div>";

    echo "<h3>Live User Reports  -  <a href=\"newpost.php?iatacode=$iatacode\">New $iatacode Post</a></h3>";
  
          $displayQuery = "SELECT * FROM posts WHERE iatacode = '$iatacode' ORDER BY postTimestamp DESC;";
          $displayResult = mysqli_query($dbc, $displayQuery);

          $entries = 0;
          
          while ($row = mysqli_fetch_array($displayResult, MYSQLI_ASSOC)) {
            $postid = $row['postid'];
            $iatacode = $row['iatacode'];
            $displayName = $row['displayName'];
            $postTitle = $row['postTitle'];
            $postBody = $row['postBody'];
            $postTimestamp = $row['postTimestamp'];
            $entries++;
          
          // Displaying Posts specific to airport
            if ($entries > 0) {
              echo "<div class='post'>";
              echo "<div id=\"postTitle\">$postTitle</div><div id=\"postName\"><b>$displayName</b>, XX minutes ago.</div>";
              echo "<p>$postBody</p>";
              echo "<div id=\"postLinks\">";
              echo "<a href=\"update.php?postid=$postid\">Update</a> &#x2022 <a href=\"delete.php?postid=$postid&postTitle=$postTitle\">Delete</a>";
              echo "</div>";
              echo "</div>";
            }
          }

          if ($entries <= 0) {
            echo "<div class='noPost'>";
            echo "<p>Looks like nobody has posted yet. <a href=\"newpost.php?iatacode=$iatacode\">Be the first?</a>\n";
            echo "</div>";
          }

          
        ?>

<?php include ("footer.php"); ?>