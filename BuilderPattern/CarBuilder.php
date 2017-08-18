<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 1:19 PM
 */

namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function addWheel()
    {
        $this->car->setPart("WheelLF",new Wheel());
        $this->car->setPart("WheelRF",new Wheel());
        $this->car->setPart("WheelLR",new Wheel());
        $this->car->setPart("WheelRR",new Wheel());

    }

    public function addEngine()
    {
        $this->car->setPart("engine", new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart("rightDoor",new Door());
        $this->car->setPart("leftDoor",new Door());
        $this->car->setPart("trunkLid",new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}