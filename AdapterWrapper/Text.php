<?php
namespace DesignPattern\Creational\AbstractFactory;


abstract class Text
{

    /**
     * @var string
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }


}