<?php

namespace Abstract;

abstract class Mailer
{
    abstract public function generateMailTemplate(): \MailTemplate;

    public function sendMail(): string{
        $template = $this->generateMailTemplate();
        return "Sending " . $template->generate();
    }
}