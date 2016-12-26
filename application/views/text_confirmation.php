<!DOCTYPE html>
<?php
  include ("/Applications/MAMP/htdocs/CodeIgniter/application/models/twilio_SMS.php");

  $message->sid;
?>

<html>
<body>
  <p>Your message of: </p>
  </p>"<?php echo $_POST["user_text"]; ?>"</p>
  <p>was sent to <?php echo $_POST["phone_number"]?>.</p>
</body>
</html>
