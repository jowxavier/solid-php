<?php

class Email
{
    public function send(string $message): string
    {
        return "Send email, {$message}";
    }
}

class Notification
{   
    public function __construct()
    {
        $this->notify = new Email;
    }

    public function send($message): string
    {
        return $this->notify->send($message);
    }
}

$notification = new Notification;
echo $notification->send('Hi there');