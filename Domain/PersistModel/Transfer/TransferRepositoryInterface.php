<?php
namespace Domain\PersistModel\Transfer;

/**
 * Interface TransferRepositoryInterface
 *
 * @package Domain\PersistModel\Transfer
 */
interface TransferRepositoryInterface
{

    /**
     * @param $id
     * @return Transfer
     */
    public function find($id);

    /**
     * @param array $params
     * @return Transfer[]
     */
    public function findBy(array $params);

}