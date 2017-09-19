<?php
namespace Infrastructure\Sendmail;

use PortAdapter\Reminder\Email\EmailAdapterInterface;

/**
 * Class SendmailAdapter
 *
 * @package Infrastructure\Sendmail
 */
class SendmailAdapter implements EmailAdapterInterface
{

    /**
     * @param $to
     * @param $subject
     * @param $body
     */
    public function send($to, $subject, $body)
    {
        // TODO: Implement send() method.
    }

}