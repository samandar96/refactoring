<?php

function post(SocialNetworkPoster $creator): void
{
    $creator->post('test');
}

post(new \Posters\FacebookPoster("username", "password"));

post(new \Posters\LinkedinPoster("test@mail.ru", "password"));