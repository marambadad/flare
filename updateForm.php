<h3>Update your <?php echo $iatacode?> Post</h3>
<form action="update.php?postid=<?php echo $postid;?>" method="POST">
<fieldset>
     <legend><?php echo $postTitle; ?></legend>
    
     Display Name: <input name="displayName" type="text" value="<?php echo $displayName;?>" maxlength="25"><br><br>
     Post Title: <input name="postTitle" type="text" maxlength="255" value="<?php echo $postTitle?>"><br><br>
     Post:<br>
     <textarea name="postBody" cols="40" rows="10"><?php echo $postBody;?></textarea><br><br>

     <input type="submit" name="submit" value="Edit">
</fieldset>
</form>