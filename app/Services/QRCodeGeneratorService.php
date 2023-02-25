<?php

namespace App\Services;

use App\Models\User\User;
use Illuminate\Encryption\Encrypter;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeGeneratorService
{
    public function generateDailyQRCode(User $user)
    {
        $data = [
            'type' => 'DAILY',
            'user_id' => $user->id,
            'amount' => 1,
            'wallet' => 'points',
            'datetime' => now()
        ];

        $encrypter = new Encrypter(config('darknine.secret_key'), 'aes-256-cbc');
        $dataJsonString = json_encode($data, JSON_THROW_ON_ERROR);
        $encrypted = $encrypter->encrypt($dataJsonString);

        return QrCode::format('svg')->generate($encrypted);
    }
}
