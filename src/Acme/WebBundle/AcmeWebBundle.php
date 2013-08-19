<?php

namespace Acme\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class AcmeWebBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

//        $container->addCompilerPass(new RepositoryPass());
    }

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
