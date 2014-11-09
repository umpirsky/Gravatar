<?php

namespace Gravatar;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Gravatar
{
    private $baseUrl = 'http://www.gravatar.com';
    private $options;
    private $resolver;

    public function __construct(array $options = array())
    {
        $this->resolver = new OptionsResolver();

        $this->resolver->setDefaults(array(
            'size' => null,
        ));

        $this->resolveOptions($options);
    }

    public function getUrl($email, array $options = array())
    {
        $this->resolveOptions($options);

        $url = sprintf(
            '%s/avatar/%s',
            $this->baseUrl,
            md5(strtolower(trim($email)))
        );

        if ($query = http_build_query($this->options)) {
            $url .= '?'.$query;
        }

        return $url;
    }

    private function resolveOptions(array $options)
    {
        if ($this->options) {
            $this->resolver->setDefaults($this->options);
        }

        $this->options = $this->resolver->resolve($options);
    }
}
