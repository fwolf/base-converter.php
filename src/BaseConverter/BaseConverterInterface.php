<?php
namespace Fwolf\Util\BaseConverter;

/**
 * @copyright   Copyright 2016 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */
interface BaseConverterInterface
{
    /**
     * Convert number string base, 2 to 62
     *
     * @param   string $number
     * @param   int    $fromBase
     * @param   int    $toBase
     * @return  string
     */
    public function convert($number, $fromBase, $toBase);
}
