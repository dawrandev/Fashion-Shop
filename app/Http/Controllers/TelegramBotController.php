<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use App\Models\User;
use App\Models\Check;
use App\Models\ProductRequest;
use Intervention\Image\Facades\Image;

class TelegramBotController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $update = Telegram::commandsHandler(true);

        $chatId = $update->getChat()->getId();
        $message = $update->getMessage();
        $text = $message->getText();
        $photo = $message->getPhoto();

        $user = User::where('chat_id', $chatId)->first();

        if ($text == '/start') {
            if (!$user) {
                $user = new User();
                $user->chat_id = $chatId;
                $user->step = 'ask_name';
                $user->save();

                Telegram::sendMessage([
                    'chat_id' => $chatId,
                    'text' => 'Iltimos, ismingiz va familiyangizni kiriting:'
                ]);
            }
        } elseif ($user) {
            switch ($user->step) {
                case 'ask_name':
                    $user->full_name = $text;
                    $user->step = 'ask_phone';
                    $user->save();

                    $keyboard = [
                        'keyboard' => [[
                            'text' => 'Kontaktni yuborish',
                            'request_contact' => true
                        ]],
                        'resize_keyboard' => true,
                        'one_time_keyboard' => true
                    ];

                    Telegram::sendMessage([
                        'chat_id' => $chatId,
                        'text' => 'Iltimos, telefon raqamingizni yuboring:',
                        'reply_markup' => json_encode($keyboard)
                    ]);
                    break;

                case 'ask_phone':
                    if ($message->has('contact')) {
                        $user->phone = $message->getContact()->getPhoneNumber();
                        $user->step = 'main_menu';
                        $user->save();

                        $this->showMainMenu($chatId);
                    }
                    break;

                case 'waiting_check_photo':
                    if ($photo) {
                        $this->savePhoto($photo, $user, 'check');
                        $user->step = 'main_menu';
                        $user->save();

                        Telegram::sendMessage([
                            'chat_id' => $chatId,
                            'text' => 'Check qabul qilindi!'
                        ]);

                        $this->showMainMenu($chatId);
                    }
                    break;

                case 'waiting_product_photo':
                    if ($photo) {
                        $this->savePhoto($photo, $user, 'product');
                        $user->step = 'main_menu';
                        $user->save();

                        Telegram::sendMessage([
                            'chat_id' => $chatId,
                            'text' => 'Tovar rasmi qabul qilindi!'
                        ]);

                        $this->showMainMenu($chatId);
                    }
                    break;
            }
        }

        return response()->json(['status' => 'success']);
    }

    private function showMainMenu($chatId)
    {
        $keyboard = [
            'keyboard' => [
                ['Check yuborish'],
                ['Tovar qidirish']
            ],
            'resize_keyboard' => true
        ];

        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => 'Asosiy menyu',
            'reply_markup' => json_encode($keyboard)
        ]);
    }

    private function savePhoto($photos, $user, $type)
    {
        $fileId = end($photos)['file_id'];
        $file = Telegram::getFile(['file_id' => $fileId]);
        $filePath = $file->getFilePath();
        $contents = file_get_contents("https://api.telegram.org/file/bot" . env('TELEGRAM_BOT_TOKEN') . "/" . $filePath);

        $filename = uniqid() . '.jpg';
        $path = public_path('uploads/' . $filename);

        Image::make($contents)->save($path);

        if ($type == 'check') {
            Check::create([
                'user_id' => $user->id,
                'image_path' => 'uploads/' . $filename,
                'full_name' => $user->full_name,
                'phone' => $user->phone
            ]);
        } else {
            ProductRequest::create([
                'user_id' => $user->id,
                'image_path' => 'uploads/' . $filename,
                'full_name' => $user->full_name,
                'phone' => $user->phone
            ]);
        }
    }
}
