<form action="delete.php?postid=<?php echo $postid ?>&postTitle=<?php echo $postTitle?>" method="POST">
<p>
    <b>Are you sure you want to delete your post titled: <i>'<?php echo $postTitle?>'?</i></b><br>
    <input type="checkbox" id="deleteConf" name="deleteConf" value="y"><label for="deleteConf">&nbsp Yes <div style="color:red;"><?php echo $alert?></div></label><br><br>
    <input type="submit" name="submit" value="Delete">
</form>