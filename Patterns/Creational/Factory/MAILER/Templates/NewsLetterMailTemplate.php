<?php

namespace Templates;

class NewsLetterMailTemplate implements \MailTemplate
{
    public function generate(): string
    {
        return 'News Letter';
    }
}