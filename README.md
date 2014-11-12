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
