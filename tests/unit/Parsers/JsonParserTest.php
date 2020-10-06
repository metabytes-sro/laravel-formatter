<?php namespace MetabytesSRO\Formatter\Test\Parsers;

use MetabytesSRO\Formatter\Parsers\JsonParser;
use MetabytesSRO\Formatter\Parsers\Parser;
use MetabytesSRO\Formatter\Test\TestCase;

class JsonParserTest extends TestCase
{

    public function testJsonParserIsInstanceOfParserInterface()
    {
        $parser = new JsonParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresentationOfJsonObject()
    {
        $expected = ['foo' => 'bar'];
        $parser = new JsonParser('{"foo": "bar"}');
        $this->assertEquals($expected, $parser->toArray());
    }

    public function testtoJsonReturnsArrayRepresentationOfArray()
    {
        $expected = '[0,1,2]';
        $parser = new JsonParser($expected);
        $this->assertEquals($expected, $parser->toJson());
    }

    public function testtoJsonReturnsJsonRepresentationOfNamedArray()
    {
        $expected = '{"foo":"bar"}';
        $parser = new JsonParser($expected);
        $this->assertEquals($expected, $parser->toJson());
    }
}
