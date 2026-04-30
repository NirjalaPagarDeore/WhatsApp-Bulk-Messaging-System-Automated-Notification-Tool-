<?php
require 'config.php';

function sendWhatsApp($phone, $message) {

    $data = [
        "to" => $phone,
        "body" => $message
    ];

    $ch = curl_init(API_URL);

    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . API_TOKEN,
        "Content-Type: application/json"
    ]);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    return curl_exec($ch);
}
?>