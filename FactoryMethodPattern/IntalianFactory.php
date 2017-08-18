<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 2:06 PM
 */

namespace DesignPatterns\Creational\FactoryMethod;


use function Couchbase\defaultDecoder;
use Prophecy\Exception\InvalidArgumentException;

class IntalianFactory extends FactoryMethod
{

    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type){
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}