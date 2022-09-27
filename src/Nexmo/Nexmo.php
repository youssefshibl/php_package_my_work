<?php

namespace Shebl\Nexmo;

use GuzzleHttp\Client;
use Shebl\Helper\Curl;

class Nexmo
{
    use Curl;
    public function test()
    {

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        var_dump($response);
    }
}
