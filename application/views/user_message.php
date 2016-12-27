<!DOCTYPE html>
<html>
  <body>
      <?php
        if ($_GET["user_action"] != "send_call")
        {
          echo "There is nothing here. Nada. Zip.";
        } else if ($_GET["user_action"] == "send_call")
        {
          ?>
          <p>Please enter the recipient's phone number (current only works with: 18133626624) and the message you would like to send.<p>
          <form method="post" action="text_confirmation">
            Phone Number: <input type="text" name="phone_number"><br>
            Message: <input type="form" name="user_text"><br>
            <input type="submit" name="message_send" value="Send Message">
          <?php } ?>
  </body>
</html>
