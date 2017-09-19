<?php
namespace Application;

use Domain\PersistModel\User\Reminder\EmailReminder;
use Domain\PersistModel\User\Reminder\SmsReminder;
use Domain\PersistModel\User\UserRepositoryInterface;
use PortAdapter\Reminder\Email\EmailReminder as EmailReminderService;
use PortAdapter\Reminder\Sms\SmsReminder as SmsReminderService;

/**
 * Class ReminderService
 *
 * @package Application
 */
class ReminderService
{

    /**
     * @var UserRepositoryInterface
     */
    protected $userRepository;

    /**
     * @var EmailReminderService
     */
    protected $emailReminderService;

    /**
     * @var SmsReminderService
     */
    protected $smsReminderService;

    /**
     * ReminderService constructor.
     *
     * @param UserRepositoryInterface $userRepository
     * @param EmailReminderService $emailReminderService
     * @param SmsReminderService $smsReminderService
     */
    public function __construct(
        UserRepositoryInterface $userRepository,
        EmailReminderService $emailReminderService,
        SmsReminderService $smsReminderService
    ) {
        $this->userRepository = $userRepository;
        $this->emailReminderService = $emailReminderService;
        $this->smsReminderService = $smsReminderService;
    }

    /**
     * @param array $params
     * @throws \Exception
     */
    public function sendReminders(array $params)
    {

        $users = $this->userRepository->findBy($params);

        foreach ($users as $user) {
            foreach ($user->getReminders() as $reminder) {
                try {
                    if($reminder instanceof EmailReminder) {
                        $this->emailReminderService->send($reminder);
                    } elseif($reminder instanceof SmsReminder) {
                        $this->smsReminderService->send($reminder);
                    } else {
                        //Throw an exception about unknown reminder type or just log this situation
                    }
                } catch (\Exception $e) {
                    //Log an exception here
                }
            }
        }

    }

}