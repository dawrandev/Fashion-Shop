<?php

use Illuminate\Support\Facades\Http;

function sendTelegramMessage($message, $imagePath)
{
    $token = env('TELEGRAM_BOT_TOKEN');
    $chat_id = env('TELEGRAM_CHANNEL_ID');

    Http::asMultipart()->post("https://api.telegram.org/bot{$token}/sendPhoto", [
        [
            'name' => 'chat_id',
            'contents' => $chat_id
        ],
        [
            'name' => 'photo',
            'contents' => fopen($imagePath, 'r'),
            'filename' => basename($imagePath)
        ],
        [
            'name' => 'caption',
            'contents' => $message
        ],
        [
            'name' => 'parse_mode',
            'contents' => 'HTML'
        ]
    ]);
}
