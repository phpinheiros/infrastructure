<?php
namespace Phpinheiros\Infrastructure\ORM;

use Doctrine\Common\Collections\Criteria;

interface ISpecificationCriteria
{

    /**
     *
     * @return Criteria
     */
    public function getCriteria();
}