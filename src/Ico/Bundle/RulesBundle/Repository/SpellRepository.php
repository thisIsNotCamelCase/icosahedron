<?php

namespace Ico\Bundle\RulesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SpellRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SpellRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('name' => 'ASC'));
    }
}
