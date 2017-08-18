<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 12:58 PM
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Parts\Truck
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function addWheel()
    {
        $this->truck->setPart("Wheel1", new Wheel());
        $this->truck->setPart("Wheel2", new Wheel());
        $this->truck->setPart("Wheel3", new Wheel());
        $this->truck->setPart("Wheel4", new Wheel());
        $this->truck->setPart("Wheel5", new Wheel());
        $this->truck->setPart("Wheel6", new Wheel());

    }

    public function addEngine()
    {
        $this->truck->setPart("truckEngine", new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart("rightDoor",new Door());
        $this->truck->setPart("leftDoor", new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}