<?php namespace Ejetar\Formatter\Test\Parsers;

use Ejetar\Formatter\Parsers\Parser;
use Ejetar\Formatter\Parsers\XmlParser;
use Ejetar\Formatter\Parsers\YamlParser;
use Ejetar\Formatter\Test\TestCase;

class YamlParserTest extends TestCase
{

    public function testYamlParserIsInstanceOfParserInterface()
    {
        $parser = new YamlParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresenationOfYamlObject()
    {
        $expected = ['foo' => 'bar'];
        $parser   = new XmlParser('<xml><foo>bar</foo></xml>');
        $x        = new YamlParser($parser->toYaml());
        $this->assertEquals($expected, $x->toArray());
    }

}
