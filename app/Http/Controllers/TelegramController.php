<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelegramController extends Controller
{
    public function validateUsername(Request $request)
    {
        $username = $request->input('telegram');

        // Basic format check
        if (!preg_match('/^@[\w\d_]{5,}$/', $username)) {
            return response()->json([
                'valid' => false,
                'message' => 'Invalid format. Please use @username with at least 5 characters.'
            ]);
        }

        // Remove @ for API call
        $cleanUsername = ltrim($username, '@');

        // Telegram Bot API call
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $response = Http::get("https://api.telegram.org/bot{$botToken}/getChat", [
            'chat_id' => "@{$cleanUsername}"
        ]);

        if ($response->ok() && isset($response['result']['id'])) {
            return response()->json(['valid' => true]);
        } else {
            return response()->json([
                'valid' => false,
                'message' => 'Telegram account not found or has not interacted with our bot.'
            ]);
        }
    }
}
