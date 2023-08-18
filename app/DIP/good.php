<?php

interface MensagemInterface
{
    public function send(string $message): string;
}

class Email implements MensagemInterface
{
    public function send(string $message): string
    {
        return "Send email {$message}";
    }
}

class WhatsApp implements MensagemInterface
{
    public function send(string $message): string
    {
        return "Send whatsapp, {$message}";
    }
}

class Notification
{
    public function __construct(MensagemInterface $message)
    {
        $this->notify = $message;
    }

    public function send($message): string
    {
        return $this->notify->send($message);
    }
}

$notification = new Notification(new WhatsApp);
echo $notification->send('Hi there');