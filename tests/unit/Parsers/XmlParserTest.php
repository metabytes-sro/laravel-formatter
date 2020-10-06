<?php namespace MetabytesSRO\Formatter\Test\Parsers;

use MetabytesSRO\Formatter\Parsers\Parser;
use MetabytesSRO\Formatter\Parsers\XmlParser;
use MetabytesSRO\Formatter\Test\TestCase;

class XmlParserTest extends TestCase
{

    public function testXmlParserIsInstanceOfParserInterface()
    {
        $parser = new XmlParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresenationOfXmlObject()
    {
        $expected = ['foo' => 'bar'];
        $parser = new XmlParser('<xml><foo>bar</foo></xml>');
        $this->assertEquals($expected, $parser->toArray());
    }

    public function testtoJsonReturnsJsonRepresentationOfXmlObject()
    {
        $expected = '{"foo":"bar"}';
        $parser = new XmlParser('<xml><foo>bar</foo></xml>');
        $this->assertEquals($expected, $parser->toJson());
    }
}
