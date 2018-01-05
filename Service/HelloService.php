<?php

namespace Samsonasik\Bundle\SampleBundle\Service;

class HelloService
{
    private $wisdom;

    public function __construct(Wisdom $wisdom)
    {
        $this->wisdom = $wisdom;
    }

    public function world()
    {
        return "Hello, World!, {$this->wisdom}";
    }
}