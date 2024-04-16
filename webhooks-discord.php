<?php

$webhook_url = '';

$msg = [
    "avatar_url" => "https://i.pinimg.com/564x/a2/80/b1/a280b1fb545c2f369202773122b5c51e.jpg",
    "username" => "Police patrol",
    "content" => "",
    "embeds" => [
        [
            "color" => 14177041,
            "author" => [
                "name" => "officer",
                "url" => "", // name url
                "icon_url" => "https://i.pinimg.com/564x/cb/ab/a7/cbaba707acf41b570da68f459995591d.jpg"
            ],

            "title" => "Reminder of server rules.",
            "url" => "", // title url
            "description" => "Hello **sir**, this ~~webhooks~~ simply serves as a reminder of certain things about our *server*...",
            "timestamp" => "",

            "fields" => [
                [
                    "name" => "📜 Server rule",
                    "value" => "Have you thought about reading the server rules in order to have a good understanding?",
                    "inline" => true
                ],
                [
                    "name" => "🎴 Autorole",
                    "value" => "Have you thought about selecting your roles in the appropriate room?",
                    "inline" => true
                ],
                [
                    "name" => "📢 Talking to others",
                    "value" => "Don't be shy about talking to other people.",
                ],
                [
                    "name" => "⛔ Report incidents",
                    "value" => "Don't forget to report any incidents you encounter to STAFF members! This will help the waiter run more smoothly.",
                ]
            ],

            "footer" => [
                "text" => "Thank you for taking the time to read this little webhooks.",
                "icon_url" => "https://i.pinimg.com/564x/bc/e4/a2/bce4a2e59e478989261890e020b21737.jpg",
            ],

            "image" => [
                "url" => "https://i.pinimg.com/564x/de/e7/eb/dee7eb13d247029553a8af6793ceec19.jpg"
            ],
            "thumbnail" =>[
                "url" => "https://i.pinimg.com/564x/58/72/5c/58725c19a88683cf82d35d22a2ed13d7.jpg"
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
