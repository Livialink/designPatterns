<?php

/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 2:23 PM
 */
namespace DesignPatterns\Creational\FactoryMethod\Test;

use DesignPatterns\Creational\FactoryMethod\Bicycle;
use DesignPatterns\Creational\FactoryMethod\CarFerrari;
use DesignPatterns\Creational\FactoryMethod\CarMercedes;
use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\IntalianFactory;
use Prophecy\Comparator\Factory;

class FactoryMethodTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateCheapVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class,$result);
    }

    public function testCanCreateFastVehicleInGermany()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class,$result);
    }

    public function testCanCreateCheapVehicleInItaly()
    {
        $factory = new IntalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class,$result);
    }

    public function testCanCreateFastVehicleInItaly()
    {
        $factory = new IntalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class,$result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */

    public function testUnknownType()
    {
        (new IntalianFactory())->create('spaceship');
    }
}
