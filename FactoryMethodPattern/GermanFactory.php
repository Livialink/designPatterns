<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 2:06 PM
 */

namespace DesignPatterns\Creational\FactoryMethod;


use Prophecy\Exception\InvalidArgumentException;

class GermanFactory extends FactoryMethod
{

    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type){
            case parent::FAST:
                return new CarMercedes();
            case parent::CHEAP:
                return new Bicycle();
            default:
                throw new InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}