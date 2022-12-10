<?php


use Twilio\Rest\Client;
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/var/www/html/vendor/autoload.php';


// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure

$x = $_POST["x"];









// Create connection
$conn = mysqli_connect($IP, "testuser", "testpass", "data");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO data.Number (phoneNum)
VALUES ($x)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$sid = "AC88455ae15ef68ccb9c6269800700191c";
$token = "5e680d305be0aecfa47415df124e1e79";
$twilio = new Client($sid, $token);

$call = $twilio->calls
               ->create($x, // to
                        "+16506401992", // from
                        [
                            "twiml" => "<Response><Say>Ahoy, World!</Say></Respon>
                        ]
               );

print($call->sid);





