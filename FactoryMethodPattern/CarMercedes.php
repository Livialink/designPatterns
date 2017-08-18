<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 2:09 PM
 */

namespace DesignPatterns\Creational\FactoryMethod;


class CarMercedes implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
    public function addAMGTuning()
    {

    }
}