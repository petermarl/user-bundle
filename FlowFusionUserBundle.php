<?php

namespace FlowFusion\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FlowFusionUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
