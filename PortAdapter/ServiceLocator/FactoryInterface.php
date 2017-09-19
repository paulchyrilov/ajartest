<?php
namespace PortAdapter\ServiceLocator;

/**
 * Interface FactoryInterface
 *
 * @package PortAdapter\ServiceLocator
 */
interface FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator);

}