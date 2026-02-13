<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecaptchaService
{
    public static function verify($token, $action, $ip, $minScore = 0.5)
    {
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => config('recaptcha.secret_key'),
                'response' => $token,
                'remoteip' => $ip,
            ]
        )->json();

        if (!isset($response['success'])) {
            return false;
        }

        return $response['success'] === true
            && $response['action'] === $action
            && $response['score'] >= $minScore;
    }
}
