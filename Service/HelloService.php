<?php

namespace Samsonasik\SampleBundle\Service;

class HelloService
{
    private $wisdom;

    public function __construct(Wisdom $wisdom)
    {
        $this->wisdom = $wisdom;
    }

    public function world()
    {
        echo "Hello, World!, {$this->wisdom}";
    }
}