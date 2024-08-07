<form action="newpost.php?iatacode=<?php echo $iatacode?>" method="POST">
<fieldset>
     <legend>What do you know about <?php echo $iatacode ?>?</legend>
    
     Display Name: <input name="displayName" type="text" maxlength="25"><br><br>
     Post Title: <input name="postTitle" type="text" maxlength="255"><br><br>
     Post:<br>
     <textarea name="postBody" cols="40" rows="5"></textarea><br><br>

     <input type="submit" name="submit" value="Post">
</fieldset>
</form>