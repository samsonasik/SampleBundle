<?php

namespace Samsonasik\Bundle\SampleBundle;

use Samsonasik\Bundle\SampleBundle\DependencyInjection\SampleBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SamsonasikSampleBundle extends Bundle
{
    public function getContainerExtension()
    {
         return new SampleBundleExtension();
    }
}