<?php

namespace Inprohub\Utils\Helper\Notify;

class NotificationManager
{
    /**
     * @var array
     */
    protected array $notifiers;

    public function __construct(array $notifiers = [])
    {
        $this->notifiers = $notifiers;
    }

    public function add(NotifyInterface $notifier): void
    {
        $this->notifiers[] = $notifier;
    }

    public function send(string $message): void
    {
        foreach ($this->notifiers as $notifier) {
            if (!$notifier instanceof NotifyInterface) {
                continue;
            }
            $notifier->send($message);
        }
    }
}