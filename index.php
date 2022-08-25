<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Which service do you want \n";
    $response .= "1. Data recovery \n";
    $response .= "2. Networking \n";
    $response .= "3. Hardware Maintenance \n";
    $response .= "4. Web design and hosting \n";
    $response .= "5. Security systems \n";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Where are you currently located? \n";
    $response .= "1. Nairobi \n";
    $response .= "2. Naivasha \n";
    $response .= "3. Nakuru \n";
    $response .= "4. Mombasa \n";


} else if ($text == "2") {
    // Business logic for first level response
    $response = "CON Where are you currently located? \n";
    $response .= "1. Nairobi \n";
    $response .= "2. Naivasha \n";
    $response .= "3. Nakuru \n";
    $response .= "4. Mombasa \n";

}
else if ($text == "3") {
    // Business logic for first level response
    $response = "CON Where are you currently located? \n";
    $response .= "1. Nairobi \n";
    $response .= "2. Naivasha \n";
    $response .= "3. Nakuru \n";
    $response .= "4. Mombasa \n";

}
else if ($text == "4") {
    // Business logic for first level response
    $response = "CON Where are you currently located? \n";
    $response .= "1. Nairobi \n";
    $response .= "2. Naivasha \n";
    $response .= "3. Nakuru \n";
    $response .= "4. Mombasa \n";

}
else if ($text == "5") {
    // Business logic for first level response
    $response = "CON Where are you currently located? \n";
    $response .= "1. Nairobi \n";
    $response .= "2. Naivasha \n";
    $response .= "3. Nakuru \n";
    $response .= "4. Mombasa \n";

}else if($text == "1*1") {
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber  = "ACC1001";

    // This is a terminal request. Note how we start the response with END
    $response = "END Your account number is ".$accountNumber;

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;