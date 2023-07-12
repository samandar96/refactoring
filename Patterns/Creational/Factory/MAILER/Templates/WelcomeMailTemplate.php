<?php

namespace Templates;

class WelcomeMailTemplate implements \MailTemplate
{
    public function generate(): string
    {
        return 'Welcome';
    }
}