<?php

namespace smpcl\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class smpclUserBundle extends Bundle
{
    
     public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
