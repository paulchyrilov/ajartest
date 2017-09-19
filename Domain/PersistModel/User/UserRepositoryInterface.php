<?php
namespace Domain\PersistModel\User;

/**
 * Interface UserRepositoryInterface
 *
 * @package Domain\PersistModel\User
 */
interface UserRepositoryInterface
{

    /**
     * @param int $id
     * @return User|null
     */
    public function find(int $id);

    /**
     * @param array $criteria
     * @return User[]
     */
    public function findBy(array $criteria);

}