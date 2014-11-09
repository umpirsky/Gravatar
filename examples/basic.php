<?php

require __DIR__.'/../vendor/autoload.php';

$gravatar = new Gravatar\Gravatar();

print($gravatar->getUrl('umpirsky@gmail.com').PHP_EOL);
