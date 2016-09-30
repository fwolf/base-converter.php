# Number Base Converter


[![Travis](https://travis-ci.org/fwolf/base-convert.php.svg?branch=master)](https://travis-ci.org/fwolf/base-convert.php)
[![Latest Stable Version](https://poser.pugx.org/fwolf/base-converter/v/stable)](https://packagist.org/packages/fwolf/base-converter)
[![License](https://poser.pugx.org/fwolf/base-converter/license)](https://packagist.org/packages/fwolf/base-converter)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/20af5465-23c1-4f80-b0b0-f01d3347509b/mini.png)](https://insight.sensiolabs.com/projects/20af5465-23c1-4f80-b0b0-f01d3347509b)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fwolf/base-converter.php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fwolf/base-converter.php/?branch=master)


Convert number (string format) between base 2 and 62.


## Install

    composer require fwolf/base-converter:~1.0


## Usage

```php
use Fwolf\Util\BaseConverter\BaseConverter;

$converter = BaseConverter::getInstance();

echo $converter->convert('zipper', 62, 10);
// Result: 32336678363

```


## License

Distribute under MIT License.
