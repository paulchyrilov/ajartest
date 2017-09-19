<?php
namespace Infrastructure\SmsC;

use PortAdapter\ServiceLocator\FactoryInterface;
use PortAdapter\ServiceLocator\ServiceLocatorInterface;

/**
 * Class SmsCAdapterFactory
 *
 * @package Infrastructure\SmsC
 */
class SmsCAdapterFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return SmsCAdapter
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new SmsCAdapter();
    }


}