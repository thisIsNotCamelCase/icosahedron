<?php

namespace Ico\Bundle\RulesBundle\Repository;

use Doctrine\ORM\EntityRepository;
//use Gedmo\Tree\Entity\Repository\NestedTreeRepository;

/**
 * FeatRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FeatRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('name' => 'ASC'));
    }
        
}
