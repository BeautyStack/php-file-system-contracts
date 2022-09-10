<?php

namespace Beautystack\Database\Contracts;

use Beautystack\Database\Contracts\Exception\EntityNotFoundException;
use Beautystack\Value\Contracts\Identity\Id;

interface RepositoryInterface
{
    /**
     * @throws EntityNotFoundException
     */
    public function findById(Id $id): ModelInterface;

    public function persist(ModelInterface $model): void;

    public function exists(Id $id): bool;

}