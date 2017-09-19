<?php
namespace PortAdapter\Reminder\Sms;

/**
 * Interface SmsAdapterInterface
 *
 * @package PortAdapter\Reminder\Sms
 */
interface SmsAdapterInterface
{

    /**
     * @param $phone
     * @param $message
     * @return mixed
     */
    public function send($phone, $message);

}