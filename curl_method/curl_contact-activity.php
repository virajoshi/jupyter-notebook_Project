<?php
    $url = "https://developintg.ongage.net/api/contact_activity";

    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X_USERNAME: shaileshpatel.stepin@gmail.com',
        'X_PASSWORD: Stepin@123',
        'X_ACCOUNT_CODE: stepin_solutions10',
        'Content-Type: application/json'
    )); 

    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
?>