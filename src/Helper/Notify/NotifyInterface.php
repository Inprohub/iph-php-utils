<?php

namespace Inprohub\Utils\Helper\Notify;

interface NotifyInterface
{
    public function send(string $message): void;
}