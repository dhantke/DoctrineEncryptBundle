<?php

namespace Bytescreen\DoctrineEncryptBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Bytescreen\DoctrineEncryptBundle\DependencyInjection\DoctrineEncryptExtension;
use Bytescreen\DoctrineEncryptBundle\DependencyInjection\Compiler\RegisterServiceCompilerPass;

class BytescreenDoctrineEncryptBundle extends Bundle {
    
    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new RegisterServiceCompilerPass(), PassConfig::TYPE_AFTER_REMOVING);
    }
    
    public function getContainerExtension()
    {
        return new DoctrineEncryptExtension();
    }
}
