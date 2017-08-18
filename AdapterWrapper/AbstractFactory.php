<?php
namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createText(string $content):Text;
}