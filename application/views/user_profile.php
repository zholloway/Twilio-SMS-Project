<!DOCTYPE html>
<?php
include ("/Applications/MAMP/htdocs/CodeIgniter/application/models/site_functions.php");
?>

<html>
  <body>
    <?php
    if (login_check($connect, $_POST["username"],$_POST["password"]) != "verified")
    {
      echo login_check($connect, $_POST["username"],$_POST["password"]);
    } else
    {
    ?>
      <p>You're logged in! Please choose an action.</p>
      <form method="get" action="user_message">
        <select name="user_action">
          <option value="send_call">Send a call</option>
          <option value="nada">This does nothing.</option>
          <option value="zilch">This also does nothing.</option>
        </select>
        <input type="submit" name="dropdown_submit" value="Go!">
      </form>
    <?php
    }
    ?>
  </body>
</html>
