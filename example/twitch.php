<?php

// ? Your Discord Webhook URL (by default try to take from .env file if exists)
$webhook_url = getenv('DISCORD_WEBHOOK_URL') ?: 'YOUR_DISCORD_WEBHOOK_URL_HERE';

$msg = [
    "content" => "",
    "embeds" => [
        [
            "color" => 0x9146ff,
            "author" => [
                "name" => "CmoiFlo is now streaming",
                "url" => "https://www.twitch.tv/cmoiflo",
                "icon_url" => "https://static-cdn.jtvnw.net/jtv_user_pictures/a73a71a7-f849-45b7-b11d-7de6475a1265-profile_image-70x70.png"
            ],
            "fields" => [
                [
                    "name" => ":joystick: Game",
                    "value" => "Portal 2",
                    "inline" => true
                ],
                [
                    "name" => ":busts_in_silhouette: Viewers",
                    "value" => "19 293",
                    "inline" => true
                ]
            ],
            "thumbnail" => [
                "url" => "https://static-cdn.jtvnw.net/ttv-boxart/19731_IGDB-285x380.jpg"
            ],
            "image" => [
                "url" => "https://static-cdn.jtvnw.net/cf_vods/d1m7jfoe9zdc1j/0c77262019b25586da07_cmoiflo_50752837229_1711717224//thumb/thumb0-320x180.jpg"
            ] 
        ]
    ]
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
