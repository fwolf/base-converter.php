<?php
namespace Fwolf\Util\BaseConverter;

/**
 * @copyright   Copyright 2016 Fwolf
 * @license     http://opensource.org/licenses/MIT MIT
 */
trait BaseConverterAwareTrait
{
    /**
     * @var BaseConverterInterface
     */
    protected $baseConverter = null;


    /**
     * @return  BaseConverterInterface
     */
    public function getBaseConverter()
    {
        if (is_null($this->baseConverter)) {
            $this->baseConverter = BaseConverter::getInstance();
        }

        return $this->baseConverter;
    }


    /**
     * @param   BaseConverterInterface $baseConverter
     * @return  $this
     */
    public function setBaseConverter(BaseConverterInterface $baseConverter)
    {
        $this->baseConverter = $baseConverter;

        return $this;
    }
}
