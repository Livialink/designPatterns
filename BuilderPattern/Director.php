<?php

/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/14/17
 * Time: 3:34 PM
 */

namespace DesignPatterns\Creational\Builder;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder):Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }

}