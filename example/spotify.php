<?php

$webhook_url = '';

$msg = [
    "content" => "",
    "embeds" => [
        [
            "color" => 0x2021216,
            "title" => "New song added!",
            "thumbnail" => [
              "url" => $AlbumCoverURL
            ],
            "fields" => [
              [
                "name" => "Track",
                "value" => $urlTrack,
                "inline" => true
              ],
              [
                "name" => "Artist",
                "value" => $ArtistName,
                "inline" => true
              ],
              [
                "name" => "Album",
                "value" => $AlbumName,
                "inline" => true
              ]
            ],
            "footer" => [
              "text" => "Added ".$SavedAt,
              "icon_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/200px-Spotify_logo_without_text.svg.png"
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
