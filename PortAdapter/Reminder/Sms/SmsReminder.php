<?php
namespace PortAdapter\Reminder\Sms;

use Domain\PersistModel\User\Reminder\SmsReminder as EntitySmsReminder;

/**
 * Class SmsReminder
 *
 * @package PortAdapter\Reminder\Sms
 */
class SmsReminder
{

    /**
     * @var SmsAdapterInterface
     */
    protected $smsAdapter;

    /**
     * SmsReminder constructor.
     *
     * @param SmsAdapterInterface $smsAdapter
     */
    public function __construct(SmsAdapterInterface $smsAdapter)
    {
        $this->smsAdapter = $smsAdapter;
    }

    /**
     * @param EntitySmsReminder $smsReminder
     * @return mixed
     */
    public function send(EntitySmsReminder $smsReminder)
    {
        return $this->smsAdapter->send($smsReminder->getUser()->getPhone(), $smsReminder->getText());
    }


}