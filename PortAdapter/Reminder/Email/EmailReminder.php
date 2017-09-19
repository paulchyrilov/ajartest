<?php
namespace PortAdapter\Reminder\Email;

use Domain\PersistModel\User\Reminder\EmailReminder as EntityEmailReminder;

/**
 * Class EmailReminder
 *
 * @package PortAdapter\Reminder\Email
 */
class EmailReminder
{

    /**
     * @var EmailAdapterInterface
     */
    protected $emailAdapter;

    /**
     * EmailReminder constructor.
     *
     * @param EmailAdapterInterface $emailAdapter
     */
    public function __construct(EmailAdapterInterface $emailAdapter)
    {
        $this->emailAdapter = $emailAdapter;
    }

    /**
     * @param EntityEmailReminder $reminder
     * @return mixed
     */
    public function send(EntityEmailReminder $reminder)
    {
        list($to, $subject, $body) = $this->prepareEmailData($reminder);

        return $this->emailAdapter->send($to, $subject, $body);
    }

    /**
     * @param EntityEmailReminder $reminder
     * @return array
     */
    protected function prepareEmailData(EntityEmailReminder $reminder)
    {
        return [
            'to' => $reminder->getUser()->getEmail(),
            'subject' => $reminder->getSubject(),
            'body' => $reminder->getText()
        ];
    }


}