<?php
namespace Domain\PersistModel\Transfer;
use Domain\PersistModel\Bank\Bank;

/**
 * Class Transfer
 *
 * @package Domain\PersistModel\Transfer
 */
class Transfer
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Bank
     */
    protected $bankFrom;

    /**
     * @var Bank
     */
    protected $bankTo;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var int
     */
    protected $status;

    /**
     * Transfer constructor.
     *
     * @param Bank $bankFrom
     * @param Bank $bankTo
     * @param float $amount
     */
    public function __construct(Bank $bankFrom, Bank $bankTo, $amount)
    {
        $this->bankFrom = $bankFrom;
        $this->bankTo = $bankTo;
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Bank
     */
    public function getBankFrom(): Bank
    {
        return $this->bankFrom;
    }

    /**
     * @return Bank
     */
    public function getBankTo(): Bank
    {
        return $this->bankTo;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

}