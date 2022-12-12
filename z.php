<?php
require_once '/var/www/html/vendor/autoload.php';
use Twilio\Rest\Client;
$x = $_POST["x"];



















// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC88455ae15ef68ccb9c6269800700191c';
$auth_token = '8adf3a54b3ba6c20ec85398b75aef73d';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+16506401992";

// Where to make a voice call (your cell phone?)
$to_number = $x;

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);


