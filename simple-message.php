<?php

// ? Your Discord Webhook URL (by default try to take from .env file if exists)
$webhook_url = getenv('DISCORD_WEBHOOK_URL') ?: 'YOUR_DISCORD_WEBHOOK_URL_HERE';

$msg = [
    "avatar_url" => "", // avatar url
    "username" => "", // username required
    "content" => "", // default message content
];

$headers = array('Content-Type: application/json');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webhook_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($msg));
$response = curl_exec($ch);
curl_close($ch);

echo $response;