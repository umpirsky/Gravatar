<?php

require __DIR__.'/../vendor/autoload.php';

$gravatar = new Gravatar\Gravatar(array('rating' => 'x'));

print($gravatar->getUrl('umpirsky@gmail.com').PHP_EOL);
