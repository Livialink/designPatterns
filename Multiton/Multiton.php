<?php
/**
 * Created by PhpStorm.
 * User: binary
 * Date: 8/18/17
 * Time: 12:43 PM
 */

namespace DesignPatterns\Creational\Multiton;

final class Multiton
{
    const  INSTANCE_1 = '1';
    const  INSTANCE_2 = '2';

    /**
     * @var Multiton[]
     */
    private static $instances = [];

    /**
     * this is private to prevent form creating arbitrary instances
     */
    private function __construct()
    {
    }

    public static function getInstance(string $instanceName): Multiton
    {
        if(!isset(self::$instances[$instanceName])){
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * privates instance from being cloned
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * prevent instance from being unserialized
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }


}