<?php
namespace PortAdapter\ServiceLocator;

/**
 * Class ServiceLocatorInterface
 *
 * @package PortAdapter\ServiceLocator
 */
interface ServiceLocatorInterface
{

    /**
     * @param $name
     * @return mixed
     */
    public function getService($name);

}