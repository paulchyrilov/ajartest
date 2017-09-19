<?php
namespace Infrastructure\Sendmail;

use PortAdapter\ServiceLocator\FactoryInterface;
use PortAdapter\ServiceLocator\ServiceLocatorInterface;

/**
 * Class SendmailAdapterFactory
 *
 * @package Infrastructure\Sendmail
 */
class SendmailAdapterFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return SendmailAdapter
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new SendmailAdapter();
    }

}