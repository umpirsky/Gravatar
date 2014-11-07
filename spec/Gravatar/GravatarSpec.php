<?php

namespace spec\Gravatar;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GravatarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Gravatar\Gravatar');
    }

    function it_gets_gravatar_url()
    {
        $this->getUrl('umpirsky@gmail.com')->shouldReturn('http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123');
    }
}
