<?php

namespace Interface;

interface NotificationType
{
    public function send($message): void;
}