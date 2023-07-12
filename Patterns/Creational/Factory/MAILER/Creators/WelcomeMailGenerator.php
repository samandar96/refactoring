<?php

namespace Creators;

use Abstract\Mailer;
use Templates\WelcomeMailTemplate;

class WelcomeMailGenerator extends Mailer
{
    public function generateMailTemplate(): \MailTemplate
    {
        return new WelcomeMailTemplate();
    }
}