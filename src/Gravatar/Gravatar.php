<?php

namespace Gravatar;

class Gravatar
{
    private $baseUrl = 'http://www.gravatar.com';

    public function getUrl($email)
    {
        return sprintf(
            '%s/avatar/%s',
            $this->baseUrl,
            md5(strtolower(trim($email)))
        );
    }
}
