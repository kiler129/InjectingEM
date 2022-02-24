<?php
declare(strict_types=1);

namespace App\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\NamingStrategy;

class ExampleStrategy implements NamingStrategy
{
    public function __construct(EntityManagerInterface $em) {
    }

    public function classToTableName($className)
    {
        return $className;
    }

    public function propertyToColumnName($propertyName, $className = null)
    {
        return $propertyName;
    }

    public function embeddedFieldToColumnName(
        $propertyName,
        $embeddedColumnName,
        $className = null,
        $embeddedClassName = null
    ) {
        return $propertyName.$embeddedColumnName;
    }

    public function referenceColumnName()
    {
        return 'ID';
    }

    public function joinColumnName($propertyName)
    {
        return $propertyName;
    }

    public function joinTableName($sourceEntity, $targetEntity, $propertyName = null)
    {
        return $sourceEntity.$targetEntity;
    }

    public function joinKeyColumnName($entityName, $referencedColumnName = null)
    {
        return $entityName;
    }
}
