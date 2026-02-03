# Discord Webhooks PHP

A simple PHP library for sending messages to Discord via webhooks, supporting both plain text and rich embed messages.

## Features

- Send plain text messages to Discord channels
- Send rich embed messages with customizable fields, colors, and media
- Easy integration using cURL
- Customizable webhook appearance (username, avatar)

## Requirements

- PHP 5.4 or higher
- cURL extension enabled

## Installation

Clone or download the repository:

```bash
git clone https://github.com/yourusername/discord-webhooks-php.git
cd discord-webhooks-php
```

Include the appropriate PHP file in your project or use the provided templates.

## Usage

### Setting up the Webhook URL

1. Go to your Discord server settings
2. Navigate to **Integrations** > **Webhooks**
3. Create a new webhook or select an existing one
4. Copy the webhook URL

Set the `$webhook_url` variable in your script to this URL, or use the environment variable `DISCORD_WEBHOOK_URL`.

### Sending a Simple Message

Use `simple-message.php` as a starting point for plain text messages.

```php
<?php

$webhook_url = getenv('DISCORD_WEBHOOK_URL') ?: 'YOUR_WEBHOOK_URL_HERE';

$msg = [
    "username" => "My Bot",
    "content" => "Hello, this is a simple message!",
    "avatar_url" => "https://example.com/avatar.png"
];

$headers = ['Content-Type: application/json'];

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
```

### Sending an Embed Message

Use `embed-message.php` as a template for rich embed messages.

```php
<?php

$webhook_url = getenv('DISCORD_WEBHOOK_URL') ?: 'YOUR_WEBHOOK_URL_HERE';

$msg = [
    "username" => "My Bot",
    "embeds" => [
        [
            "color" => 0xb7996d, // color in hexadecimal
            "title" => "Embed Title",
            "url" => "https://example.com",
            "description" => "This is a rich embed message.",
            "timestamp" => date('c'), // Current timestamp
            "author" => [
                "name" => "Author Name",
                "url" => "https://example.com/author",
                "icon_url" => "https://example.com/author-icon.png"
            ],
            "fields" => [
                [
                    "name" => "Field 1",
                    "value" => "Value 1",
                    "inline" => true
                ],
                [
                    "name" => "Field 2",
                    "value" => "Value 2",
                    "inline" => true
                ]
            ],
            "footer" => [
                "text" => "Footer text",
                "icon_url" => "https://example.com/footer-icon.png"
            ],
            "image" => [
                "url" => "https://example.com/image.png"
            ],
            "thumbnail" => [
                "url" => "https://example.com/thumbnail.png"
            ]
        ]
    ]
];

// Same cURL code as above...
```

## Message Structure Reference

### Base Properties

| Property    | Type   | Description |
|-------------|--------|-------------|
| `username`  | string | The name displayed for the webhook |
| `avatar_url`| string | URL for the webhook's avatar image |
| `content`   | string | Plain text content (for simple messages) |

### Embed Properties

| Property    | Type   | Description |
|-------------|--------|-------------|
| `color`     | int    | Color of the embed sidebar (decimal value) |
| `title`     | string | Title of the embed |
| `url`       | string | URL linked to the title |
| `description`| string| Main text content of the embed |
| `timestamp` | string | ISO 8601 timestamp |

#### Author Object
| Property    | Type   | Description |
|-------------|--------|-------------|
| `name`      | string | Author name |
| `url`       | string | URL linked to the author name |
| `icon_url`  | string | Author icon URL |

#### Fields Array
| Property    | Type   | Description |
|-------------|--------|-------------|
| `name`      | string | Field name |
| `value`     | string | Field value |
| `inline`    | bool   | Whether the field is inline |

#### Footer Object
| Property    | Type   | Description |
|-------------|--------|-------------|
| `text`      | string | Footer text |
| `icon_url`  | string | Footer icon URL |

#### Image Object
| Property    | Type   | Description |
|-------------|--------|-------------|
| `url`       | string | Large image URL |

#### Thumbnail Object
| Property    | Type   | Description |
|-------------|--------|-------------|
| `url`       | string | Small thumbnail image URL |

## Examples

The `example/` directory contains additional examples:

- `spotify.php`: Example of a Spotify track embed
- `twitch.php`: Example of a Twitch stream embed
- `empty.php`: Minimal template

## API Documentation

For complete Discord webhook API documentation, refer to the [official Discord Developer Portal](https://discord.com/developers/docs/resources/webhook).

## Contributing

Contributions are welcome! Please feel free to submit issues and pull requests.

## License

This project is open source. Check the LICENSE file for details.