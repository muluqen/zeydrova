<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate incoming form data
        $request->validate([
            'name' => 'required|string|max:255',
            'telegram' => 'required|string|regex:/^@[\w\d_]{5,}$/',
            'message' => 'required|string'
        ]);

        // Format the message for Telegram
        $text = "📩 New message from Zeydrova:\n"
              . "Name: {$request->name}\n"
              . "Telegram: {$request->telegram}\n"
              . "Message: {$request->message}";

        // Load credentials from .env
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        // Send message to Telegram using trusted CA bundle
        $response = Http::withOptions([
            'verify' => storage_path('certs/cacert.pem')
        ])->post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
        ]);

        // Log failure if Telegram doesn't respond successfully
        if (!$response->successful()) {
            Log::error('Telegram message failed', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
        }

        // Redirect back with success message
        return back()->with('success', 'Message sent to Telegram!');
    }
}
