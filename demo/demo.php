<?php
/**
 * @copyright   Copyright 2016 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */

use Fwolf\Util\BaseConverter\BaseConverter;

require __DIR__ . '/../vendor/autoload.php';

$eol = (PHP_SAPI == 'cli') ? PHP_EOL : '<br />' . PHP_EOL;

$converter = BaseConverter::getInstance();

echo $converter->convert('zipper', 62, 10) . $eol;
// Result: 32336678363

echo $converter->convert('9876543210', 10, 62) . $eol;
// Result: aMoY42
