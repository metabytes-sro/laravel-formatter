<?php namespace MetabytesSRO\Formatter\Test\Parsers;

use MetabytesSRO\Formatter\Parsers\CsvParser;
use MetabytesSRO\Formatter\Parsers\Parser;
use MetabytesSRO\Formatter\Test\TestCase;

class CsvParserTest extends TestCase
{

    private $simpleCsv = 'foo,boo
bar,far';

    public function testCsvParserIsInstanceOfParserInterface()
    {
        $parser = new CsvParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testConstructorThrowsInvalidExecptionWhenArrayDataIsProvided()
    {
        $parser = new CsvParser([0, 1, 3]);
    }

    public function testtoArrayReturnsCsvArrayRepresentation()
    {
        $expected = [['foo' => 'bar', 'boo' => 'far']];
        $parser   = new CsvParser($this->simpleCsv);
        $this->assertEquals($expected, $parser->toArray());
    }

    public function testtoJsonReturnsJsonRepresentationOfNamedArray()
    {
        $expected = '[{"foo":"bar","boo":"far"}]';
        $parser   = new CsvParser($this->simpleCsv);
        $this->assertEquals($expected, $parser->toJson());
    }

}
