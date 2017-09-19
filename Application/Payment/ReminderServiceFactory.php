<?php
namespace Application;

use Domain\PersistModel\User\UserRepositoryInterface;
use PortAdapter\Reminder\Email\EmailReminder;
use PortAdapter\Reminder\Sms\SmsReminder;
use PortAdapter\ServiceLocator\FactoryInterface;
use PortAdapter\ServiceLocator\ServiceLocatorInterface;

/**
 * Class ReminderServiceFactory
 *
 * @package Application
 */
class ReminderServiceFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return ReminderService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $userRepository = $serviceLocator->getService(UserRepositoryInterface::class);
        $emailReminderService = $serviceLocator->getService(EmailReminder::class);
        $smsReminderService = $serviceLocator->getService(SmsReminder::class);

        return new ReminderService($userRepository, $emailReminderService, $smsReminderService);
    }

}