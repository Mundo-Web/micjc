<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Models\General;
use App\Models\Message;
use App\Models\Ordenes;
use App\Models\User;
use Illuminate\Http\Request;
use SoDe\Extend\File;
use SoDe\Extend\JSON;
use SoDe\Extend\Text;

class MailingController extends Controller
{
    static function notifyContact(Message $messageJpa)
    {
        try {
            $generalJpa = General::all()->first();
            $content = File::get('../storage/app/utils/mailing/contact.html');
            $data =  [
                'general' => $generalJpa->toArray(),
                'contact' => $messageJpa->toArray(),
                'domain' => env('APP_DOMAIN')
            ];
            $mail = EmailConfig::config();
            $mail->Subject = '¡Gracias por escribirnos!';
            $mail->isHTML(true);
            $mail->Body = Text::replaceData($content, JSON::flatten($data), [
                'contact.full_name' => fn($x) => explode(' ', $x)[0]
            ]);
            $mail->addAddress($messageJpa->email, $messageJpa->full_name);
            $mail->send();
        } catch (\Throwable $th) {
            // dump($th->getMessage());
        }
    }
}
