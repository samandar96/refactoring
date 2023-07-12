<?php

namespace Posters;

use Connectors\LinkedinConnector;
use Interface\SocialNetworkConnector;

class LinkedinPoster extends \SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedinConnector($this->email, $this->password);
    }
}