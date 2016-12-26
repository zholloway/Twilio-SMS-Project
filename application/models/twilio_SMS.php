<?php

$sid = "AC78215ae7a907d34133ef20a540101969"; // Your Account SID from www.twilio.com/console
$token = "ca019b3d55805c71555f19a05af3d347"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  $_POST["phone_number"], // Text this number
  array(
    'from' => '13057832454', // From a valid Twilio number
    'body' => $_POST["user_text"]
  )
);

//$message->sid; // sends the created SMS to the recipient
