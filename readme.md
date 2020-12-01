# Laravel Formatter

## Table of Contents
  * [About](#about)
  * [Installation](#installation)
  * [Parsers](#parsers)
  * [Formats](#formats)
  * [General Usage](#general-usage)
  * [Changelog](#changelog)
  * [Contributing](#contributing)
  * [License](#license)
  
## About
A package that enables you to convert your data into various formats such as JSON, XML, CSV and YAML. Based on FuelPHP's 💧 formatter class.

Works with Laravel 6.x, 7.x, 8.x

Based on [Soapbox/laravel-formatter](https://github.com/Soapbox/laravel-formatter), [ejetar/laravel-formatter](https://github.com/ejetar/laravel-formatter)

## Installation

Through command line:

```bash
composer require metabytes-sro/laravel-formatter
```

## Parsers
All of the following are supported formats that the formatter can read from.
* Array
* CSV
* JSON
* XML
* YAML

## Formats
All of the following are formats that are supported for output.
* Array
* CSV
* JSON
* XML
* YAML

## General Usage

__Including The Formatter__

```php
use MetabytesSRO\Formatter\Formatter;
```

__Supported Types__

```php
Formatter::JSON; //json
Formatter::CSV;  //csv
Formatter::XML;  //xml
Formatter::ARR;  //array
Formatter::YAML; //yaml
```

__Making Your First Formatter(s)__

```php
$formatter = Formatter::make($jsonString, Formatter::JSON);
$formatter = Formatter::make($yamlString, Formatter::YAML);
$formatter = Formatter::make($array, Formatter::ARR);
...
```

__Outputting From Your Formatter__

```php
$csv   = $formatter->toCsv();
$json  = $formatter->toJson();
$xml   = $formatter->toXml();
$array = $formatter->toArray();
$yaml  = $formatter->toYaml();
```

## Changelog
Nothing for now...

## Contributing
Contribute to this wonderful project, it will be a pleasure to have you with us. Let's help the free software community. You are invited to incorporate new features, make corrections, report bugs, and any other form of support.
Don't forget to star in this repository! 😀 

## License
This library is a open-source software licensed under the MIT license.
