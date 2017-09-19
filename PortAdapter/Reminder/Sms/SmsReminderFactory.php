<?php

namespace PortAdapter\Reminder\Sms;

use Infrastructure\SmsC\SmsCAdapter;
use PortAdapter\ServiceLocator\FactoryInterface;
use PortAdapter\ServiceLocator\ServiceLocatorInterface;

/**
 * Class SmsReminderFactory
 *
 * @package PortAdapter\Reminder\Sms
 */
class SmsReminderFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return SmsReminder
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $smsCAdapter = $serviceLocator->getService(SmsCAdapter::class);

        return new SmsReminder($smsCAdapter);
    }

}