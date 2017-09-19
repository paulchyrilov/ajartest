<?php
namespace Infrastructure\SmsC;

use PortAdapter\Reminder\Sms\SmsAdapterInterface;

/**
 * Class SmsCAdapter
 *
 * @package Infrastructure\SmsC
 */
class SmsCAdapter implements SmsAdapterInterface
{

    /**
     * @param $phone
     * @param $message
     */
    public function send($phone, $message)
    {
        // TODO: Implement send() method.
    }

}