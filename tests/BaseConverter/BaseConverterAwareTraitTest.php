<?php
namespace FwolfTest\Util\BaseConverterAwareTrait;

use Fwolf\Util\BaseConverter\BaseConverterAwareTrait;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use PHPUnit_Framework_TestCase as PHPUnitTestCase;

/**
 * @copyright   Copyright 2016 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */
class BaseConverterAwareTraitTest extends PHPUnitTestCase
{
    /**
     * @param   string $methods
     * @return  MockObject | BaseConverterAwareTrait
     */
    protected function buildMock($methods = null)
    {
        $mock = $this->getMockBuilder(BaseConverterAwareTrait::class)
            ->setMethods($methods)
            ->getMockForTrait();

        return $mock;
    }


    public function testAccessors()
    {
        $trait = $this->buildMock();

        $converter = $trait->getBaseConverter();

        $trait->setBaseConverter($converter);
    }
}
