<?php
//Include access token file
include 'accessToken.php';

$registerUrl = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';
$BusinessShortCode = '174379';
$confirmationUrl = 'https://mydomian.com/confirmation_url.php';
$validationUrl = 'https://mydomian.com/validation_url.php';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $registersurl);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization:Bearer' . $access_token));

$curl_post_data = array(
    'ShortCode' => $BusinessShortCode,
    'ResponseType' => 'Completed',
    'ConfirmtionalURL' => $confirmationUrl,
    'ValidationUrl' => $validationUrl,
);

$date_string =json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
echo $curl_response = curl_exec($curl);
