<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 2:10 PM
 */

namespace DesignPatterns\Creational\FactoryMethod;


class Bicycle implements VehicleInterface
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