<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 2:11 PM
 */

namespace DesignPatterns\Creational\FactoryMethod;


class CarFerrari implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}