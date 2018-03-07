<?php
//SEND GRID CODE

require 'sendgrid-php/vendor/autoload.php';
$apiKey='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';
$client = new \SendGrid($apiKey);

$request_body=array();
$request_body['personalizations'][0]['to'][0]['email']=$toEmail; // use the variable you used to store person's email
$request_body['personalizations'][0]['Bcc'][0]['email']=$bccEmail; // wep.niti1@gmail.com
$request_body['personalizations'][0]['subject']=$subject;  // "Thank you for registering with WEP!"
$request_body['from']['name']=$fromName; // WEP
$request_body['from']['email']=$fromEmail; // wep.niti@gmail.com
$request_body['content'][0]['type']="text/html"; // "Your registration unique id is as follows:"
$request_body['content'][0]['value']=$content; // use the variable name used for unique id generated
$response = $client->client->mail()->send()->post($request_body);






?>
