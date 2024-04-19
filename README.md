# Discord-webhooks-php
This is a simple php code that allows you to send messages via discord webhooks. You can send directly in "embed" format.

## Use
To send the message, we use ***curl***. 

To use the code, simply retrieve the code from webhooks-discord.php. All you have to do is modify it as you wish to use it.

- The webhook url must be set in the variable ``$webhook_url``.
- The entire content of the message sent by webhooks is stored in the ``$msg`` array

This is what the contents of the ``$msg`` variable should look like:
```php
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
```



## Usage chart
### Base value
|Value|Description|
|:----|:----------|
|avatar_url|Webhooks profile picture|
|username|Webhooks name|
|content|The content written in it will be the message sent by the webhooks, but not in an embed like a normal message. You can put in titles, subtitles, list, bold, italic, censored, etc...|

### Value for embeds
#### embeds
|Value|Description|
|:----|:----------|
|color|The color on the side of the embed|
|title|the title|
|url|A link to the title|
|description|This is the text that will be displayed in the embed. Just below the title|
|timestamp|Will be displayed at the very bottom of the embed in the footer. If there is already a footer, it will be added with it.|

#### author
|Value|Description|
|:----|:----------|
|name|It will be a name written at the top of the embed|
|url|You can add a link when you click on the name|
|icon_url|Image used with name|


#### fields
|Value|Description|
|:----|:----------|
|name|Name of the field|
|value|The content will be written here|
|inline|True/false, if true, then the field will be put next to the next or previous field if the latter also has the inline value in true|

#### footer
|Value|Description|
|:----|:----------|
|text|This will be the text written in the footer|
|icon_url|Here you can add an image to the footer. It works in the same way as the image in the title|

#### image
|Value|Description|
|:----|:----------|
|url|Displays a small image in the top right-hand corner of the embed.|

#### thumbnail
|Value|Description|
|:----|:----------|
|url|Displays a large image at the bottom of the embed.|

Examples are provided in ``webhooks-discord.php``. Other examples can be found in ``example/``

- If you'd like to find out more, you can click directly on [this link](https://birdie0.github.io/discord-webhooks-guide/examples/spotify.html) for the documentation.