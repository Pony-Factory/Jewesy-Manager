<?php

namespace PonyF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PonyFUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
