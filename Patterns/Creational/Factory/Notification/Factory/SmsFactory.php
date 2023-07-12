<?php

namespace Types;

use Interface\NotificationType;

class SmsFactory extends \NotificationSender
{
    public function getNotificationType(): NotificationType
    {
        return new Sms();
    }
}