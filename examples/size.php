<?php

require __DIR__.'/../vendor/autoload.php';

$gravatar = new Gravatar\Gravatar(array('size' => 25));

print($gravatar->getUrl('umpirsky@gmail.com').PHP_EOL);
