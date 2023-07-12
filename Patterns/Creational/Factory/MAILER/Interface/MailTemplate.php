<?php

interface MailTemplate
{
    public function generate(): string;
}