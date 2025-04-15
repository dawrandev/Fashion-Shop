<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
    // app/Http/Controllers/TelegramBotController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramBotController extends Controller
{
    public function webhook(Request $request)
    {
        $data = $request->all();
        
        if (isset($data['message']['photo'])) {
            $file_id = end($data['message']['photo'])['file_id']; // eng katta rasm versiyasi
            $botToken = env(TELEGRAM_BOT_TOKEN);

            // Telegram API orqali file path olish
            $fileResponse = Http::get("https://api.telegram.org/bot{$botToken}/getFile", [
                'file_id' => $file_id
            ]);

            $filePath = $fileResponse['result']['file_path'];
            $downloadUrl = "https://api.telegram.org/file/bot{$botToken}/{$filePath}";

            // Faylni yuklab olish
            $fileContent = file_get_contents($downloadUrl);

            // Laravel backendga POST qilish
            $tempPath = storage_path('app/temp_photo.jpg');
            file_put_contents($tempPath, $fileContent);

            $response = Http::attach(
                'photo',
                file_get_contents($tempPath),
                'photo.jpg'
            )->post('https://e3ab-123-45-67-89.ngrok-free.app/api/telegram/upload-image');
            

            return response('Image forwarded to backend!', 200);
        }

        return response('No image found.', 200);
    }
}

}
