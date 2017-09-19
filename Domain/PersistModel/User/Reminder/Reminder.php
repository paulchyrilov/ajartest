<?php
namespace Domain\PersistModel\User\Reminder;
use Domain\PersistModel\User\User;

/**
 * Class Reminder
 *
 * @package Domain\PersistModel\User\Reminder
 */
abstract class Reminder
{

    /**
     * @var User
     */
    protected $user;

    /**
     * @var string
     */
    protected $text;

    /**
     * Reminder constructor.
     *
     * @param User $user
     * @param string $text
     */
    public function __construct(User $user, $text)
    {
        $this->user = $user;
        $this->text = $text;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}