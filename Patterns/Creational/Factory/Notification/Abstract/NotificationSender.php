<?php

abstract class NotificationSender
{
    abstract public function getNotificationType(): \Interface\NotificationType;

    public function sendNotification($message): void
    {
        $type = $this->getNotificationType();
        $type->send($message);
    }
}