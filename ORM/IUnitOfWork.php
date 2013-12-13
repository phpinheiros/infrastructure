<?php
namespace Phpinheiros\Infrastructure\ORM;

interface IUnitOfWork
{

    public function commit();
}