<?php

namespace Ico\Bundle\RulesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SpellListRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SpellListRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('name' => 'ASC'));
    }
}
