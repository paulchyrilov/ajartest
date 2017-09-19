<?php
namespace Application;
use Domain\PersistModel\Bank\Bank;
use Domain\PersistModel\Transfer\Transfer;
use Domain\PersistModel\Transfer\TransferRepositoryInterface;

/**
 * Class TransferService
 *
 * @package Application
 */
class TransferService
{


    protected $renderer;

    /**
     * @var TransferRepositoryInterface
     */
    protected $transferRepository;

    /**
     * @param array $params
     * @return array
     */
    public function createTransferFiles(array $params = [])
    {
        $result = [];

        $transfers = $this->transferRepository->findBy($params);

        foreach ($transfers as $transfer) {
            $result[$transfer->getId()] = $this->createTransferFile($transfer);
        }

        return $result;
    }


    public function createTransferFile(Transfer $transfer)
    {
        return $this->renderer->render($transfer);
    }

}