<?php

namespace Shebl\Nexmo;

use GuzzleHttp\Client;
use Shebl\Helper\Curl;

class Nexmo
{
    use Curl;
    public function SmsMessage($from, $text, $to, $api_key, $api_secret)
    {
        $data  = [
            "from" => $from,
            "text" => $text,
            "to" => $to,
            "api_key" => $api_key,
            "api_secret" => $api_secret
        ];

        $responst = $this->Curl_post('https://rest.nexmo.com/sms/json', $data);
        return $responst;
    }
}
