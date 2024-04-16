<?php

$webhook_url = '';

$msg = [
    "avatar_url" => "",
    "username" => "",
    "content" => "",
    "embeds" => [
        [
            "color" => 14177041,
            "author" => [
                "name" => "",
                "url" => "",
                "icon_url" => ""
            ],

            "title" => "",
            "url" => "",
            "description" => "",
            "timestamp" => "",

            "fields" => [
                [
                    "name" => "",
                    "value" => "",
                    "inline" => true
                ]
            ],

            "footer" => [
                "text" => "",
                "icon_url" => "",
            ],

            "image" => [
                "url" => ""
            ],
            "thumbnail" =>[
                "url" => ""
            ],
        ]
    ],
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
