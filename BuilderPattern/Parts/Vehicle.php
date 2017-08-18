<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/16/17
 * Time: 1:03 PM
 */

namespace DesignPatterns\Creational\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data=[];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key,$value)
    {
        $this->data[$key] = $value;
    }
}