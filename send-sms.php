<?php


// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once "vendor/autoload.php";

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");

$twilio = new Client($sid, $token);

$message = $twilio->messages->create(
    "+84832128479", // to
    [
        "body" =>
            "Hello Hieu From Twilio!",
        "from" => "+18543549827",
    ]
);

print $message->body;