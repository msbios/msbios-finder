<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Finder\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Finder\Module;
use Zend\Config\Config;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ModuleFactory
 * @package MSBios\Finder\Factory
 */
class ModuleFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Config
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $options */
        $options = $container->get('config')[Module::class];

        // TODO: Надо переделать
        $options['authentication'] = function () {
            return true;
        };

        return new Config($options);
    }
}
