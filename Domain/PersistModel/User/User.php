<?php
namespace Domain\PersistModel\User;
use Domain\PersistModel\User\Reminder\Reminder;

/**
 * Class User
 *
 * @package Domain\PersistModel\User
 */
class User
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * Normally reminders shouldn't be an attribute of User.
     * It rather should be an attribute of some Entity like CustomerPlan, related to the User.
     *
     * @var Reminder[]
     */
    protected $reminders;

    /**
     * User constructor.
     *
     * @param string $firstname
     * @param string $lastname
     * @param $email
     * @param string $phone
     */
    public function __construct($firstname, $lastname, $email, $phone)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
    }


    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param Reminder $reminder
     */
    public function addReminder(Reminder $reminder)
    {
        $this->reminders[] = $reminder;
    }

    /**
     * @return Reminder[]
     */
    public function getReminders(): array
    {
        return $this->reminders;
    }

}