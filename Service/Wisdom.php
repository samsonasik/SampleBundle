<?php

namespace Samsonasik\SampleBundle\Service;

class Wisdom
{
    public function __toString()
    {
        $wisdoms = [
            'be nice',
            'be good',
        ];

        return $wisdoms[rand(0, count($wisdoms) - 1)];
    }
}