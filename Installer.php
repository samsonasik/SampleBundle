<?php

namespace Samsonasik\SampleBundle;

use App\Kernel;
use Composer\Script\Event;
use Sensio\Bundle\GeneratorBundle\Manipulator\KernelManipulator;

class Installer
{
    public function addBundle(Event $event)
    {
       (new KernelManipulator(new Kernel('dev', true)))
            ->addBundle('Samsonasik\\SampleBundle\\SampleBundle');
    }
}