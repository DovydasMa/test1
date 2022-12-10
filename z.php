<?php

use Twilio\Rest\Client;
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/var/www/html/vendor/autoload.php';


// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure

$x = $_POST["x"];

$sid = "AC88455ae15ef68ccb9c6269800700191c";
$token = "8914f7ae04e44b544dbb52fd9cfcc35d";
$twilio = new Client($sid, $token);

$call = $twilio->calls
               ->create($x, // to
                        "+16506401992", // from
                        [
                            "twiml" => "<Response><Say>Ahoy, World!</Say></Response>"
                        ]
               );

print($call->sid);

