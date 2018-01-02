<?php

namespace SampleBundle;

use SampleBundle\DependencyInjection\SampleBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SampleBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new SampleBundleExtension();
    }
}