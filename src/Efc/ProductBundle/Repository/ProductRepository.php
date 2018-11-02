<?php

namespace Efc\ProductBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAll()
    {
        return $this->findBy([], ['sku' => 'ASC']);
    }

    public function findBySku($sku)
    {
        return $this->findBy(['sku' => $sku], ['sku' => 'ASC']);
    }
}