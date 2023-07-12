<?php

function main(\Abstract\Mailer $mailer): void
{
    $mailer->sendMail();
}

main(new \Creators\WelcomeMailGenerator());

main(new \Creators\NewsLetterMailGenerator());