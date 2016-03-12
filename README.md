<h3 align="center">
    <a href="https://github.com/umpirsky">
        <img src="https://farm2.staticflickr.com/1709/25098526884_ae4d50465f_o_d.png" />
    </a>
</h3>
<p align="center">
  <a href="https://github.com/umpirsky/Symfony-Upgrade-Fixer">symfony upgrade fixer</a> &bull;
  <a href="https://github.com/umpirsky/Twig-Gettext-Extractor">twig gettext extractor</a> &bull;
  <a href="https://github.com/umpirsky/wisdom">wisdom</a> &bull;
  <a href="https://github.com/umpirsky/centipede">centipede</a> &bull;
  <a href="https://github.com/umpirsky/PermissionsHandler">permissions handler</a> &bull;
  <a href="https://github.com/umpirsky/Extraload">extraload</a> &bull;
  <b>gravatar</b> &bull;
  <a href="https://github.com/umpirsky/locurro">locurro</a> &bull;
  <a href="https://github.com/umpirsky/country-list">country list</a> &bull;
  <a href="https://github.com/umpirsky/Transliterator">transliterator</a>
</p>

# Gravatar [![Build Status](https://travis-ci.org/umpirsky/Gravatar.svg)](https://travis-ci.org/umpirsky/Gravatar)

Lightweight Gravatar library.

## Examples

### Basic

```php
<?php

print((new Gravatar\Gravatar())->getUrl('umpirsky@gmail.com'));

// Outputs:
// http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123
```
![gravatar](http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123)

### Custom options

```php
<?php

$gravatar = new Gravatar\Gravatar(array(
    'size'   => 120,
    'rating' => 'x',
));

print($gravatar)->getUrl('umpirsky@gmail.com'));

// Outputs:
// http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123?size=120&rating=x
```
![gravatar](http://www.gravatar.com/avatar/71a0abb69d81544d7cb390e186d5d123?size=120&rating=x)

See more [examples](https://github.com/umpirsky/Gravatar/tree/master/examples).
