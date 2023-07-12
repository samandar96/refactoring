<?php

function sendNotification(NotificationSender $sender): void
{
    $sender->sendNotification("Test");
}

sendNotification(new \Types\SmsFactory());