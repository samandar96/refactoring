<?php

namespace Creators;

use Abstract\Mailer;
use Templates\NewsLetterMailTemplate;

class NewsLetterMailGenerator extends Mailer
{
    public function generateMailTemplate(): \MailTemplate
    {
        return new NewsLetterMailTemplate();
    }
}