<?php

namespace PortAdapter\Reminder\Email;

/**
 * Interface EmailAdapterInterface
 *
 * @package PortAdapter\Reminder\Email
 */
interface EmailAdapterInterface
{

    /**
     * @param $to
     * @param $subject
     * @param $body
     * @return mixed
     */
    public function send($to, $subject, $body);

}