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

    function it_gets_gravatar_url_with_proper_size_if_custom_size_passed()
    {
        $this->getUrl('umpirsky@gmail.com', array('size' => 40))->shouldReturn('http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123?size=40');
    }

    function it_gets_gravatar_url_with_proper_size_if_constructed_with_custom_size()
    {
        $this->beConstructedWith(array('size' => 40));

        $this->getUrl('umpirsky@gmail.com')->shouldReturn('http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123?size=40');
    }

    function it_gets_gravatar_url_with_proper_rating_if_constructed_with_custom_rating()
    {
        $this->beConstructedWith(array('rating' => 'x'));

        $this->getUrl('umpirsky@gmail.com')->shouldReturn('http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123?rating=x');
    }

    function it_gets_gravatar_url_with_proper_size_and_rating_if_constructed_with_custom_size_and_rating()
    {
        $this->beConstructedWith(array(
            'size' => '80',
            'rating' => 'x',
        ));

        $this->getUrl('umpirsky@gmail.com')->shouldReturn('http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123?size=80&rating=x');
    }
}
