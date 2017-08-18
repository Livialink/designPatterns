<?php
namespace DesignPatterns\Creational\AbstractFactory\Test;

require_once "vendor/autoload.php";


use DesignPattern\Creational\AbstractFactory\HtmlFactory;
use DesignPattern\Creational\AbstractFactory\HtmlText;
use DesignPattern\Creational\AbstractFactory\JsonFactory;
use DesignPattern\Creational\AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{

    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');
        $this->assertInstanceOf(HtmlText::class,$text);
    }


    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf(JsonText::class,$text);
    }
}

?>