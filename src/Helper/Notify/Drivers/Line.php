<?php

namespace Inprohub\Utils\Helper\Notify\Drivers;

use Inprohub\Utils\Helper\Notify\NotifyInterface;

class Line implements NotifyInterface
{
    const ENDPOINT = "https://notify-api.line.me/api/notify";

    /**
     * @var string
     */
    protected string $token;

    public function __construct($token = '')
    {
        $this->token = $token;
    }

    public function send(string $message): void
    {
        $token = explode(',', $this->token);
        foreach ($token as $t) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, self::ENDPOINT);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "message=$message");
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
                "Authorization: Bearer $t"
            ]);
            $result = curl_exec($ch);
            curl_close($ch);
        }
    }
}