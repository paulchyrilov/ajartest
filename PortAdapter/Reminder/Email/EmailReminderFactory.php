<?php
namespace PortAdapter\Reminder\Email;

use Infrastructure\Sendmail\SendmailAdapter;
use PortAdapter\ServiceLocator\FactoryInterface;
use PortAdapter\ServiceLocator\ServiceLocatorInterface;

/**
 * Class EmailReminderFactory
 *
 * @package PortAdapter\Reminder\Email
 */
class EmailReminderFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return EmailReminder
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $sendmailAdapter = $serviceLocator->getService(SendmailAdapter::class);

        return new EmailReminder($sendmailAdapter);
    }

}