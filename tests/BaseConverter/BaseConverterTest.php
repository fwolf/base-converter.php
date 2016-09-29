<?php
namespace FwolfTest\Util\BaseConverter;

use Fwolf\Util\BaseConverter\BaseConverter;
use PHPUnit_Framework_MockObject_MockObject as MockObject;
use PHPUnit_Framework_TestCase as PHPUnitTestCase;

/**
 * @copyright   Copyright 2013-2016 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */
class BaseConverterTest extends PHPUnitTestCase
{
    /**
     * @param   string $methods
     * @return  MockObject | BaseConverter
     */
    protected function buildMock($methods = null)
    {
        $mock = $this->getMockBuilder(BaseConverter::class)
            ->setMethods($methods)
            ->getMock();

        return $mock;
    }


    public function testConvert()
    {
        $converter = $this->buildMock();

        // Use build-in base_convert()
        $this->assertEquals('z', $converter->convert(35, 10, 36));


        $this->assertEquals('0', $converter->convert(0, 10, 62));
        $this->assertEquals('0', $converter->convert(0, 62, 10));

        $this->assertEquals('f', $converter->convert(15, 10, 62));
        $this->assertEquals('15', $converter->convert('f', 62, 10));


        /** @noinspection SpellCheckingInspection */
        {
            $n16 = 'abcdef00001234567890';
            $n36 = '3o47re02jzqisvio';
            $n62 = '43tpyVgFkHFsZO';
        }

        $this->assertEquals('0', $converter->convert(null, 10, 62));
        $this->assertEquals('Z', $converter->convert(61, 10, 62));
        $this->assertEquals('61', $converter->convert('Z', 62, 10));

        $this->assertEquals($n36, $converter->convert($n16, 16, 36));
        $this->assertEquals($n16, $converter->convert($n36, 36, 16));
        $this->assertEquals($n16, $converter->convert($n62, 62, 16));
    }


    /**
     * @expectedException  \InvalidArgumentException
     */
    public function testConvertWithInvalidArgument()
    {
        $converter = $this->buildMock();

        $converter->convert(0, 1, 100);
    }
}
