<?php
namespace Domain\PersistModel\User\Reminder;
use Domain\PersistModel\User\User;

/**
 * Class EmailReminder
 *
 * @package Domain\PersistModel\User\Reminder
 */
class EmailReminder extends Reminder
{

    /**
     * @var string
     */
    protected $subject;

    /**
     * EmailReminder constructor.
     *
     * @param User $user
     * @param string $subject
     * @param $text
     */
    public function __construct(User $user, $subject, $text)
    {
        parent::__construct($user, $text);
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

}