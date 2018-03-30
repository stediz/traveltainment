<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferPriceType StructType
 * @subpackage Structs
 */
class TransferPriceType extends SimplePriceType
{
    /**
     * The _
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $_;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TransferPriceType
     * @uses TransferPriceType::set_()
     * @uses TransferPriceType::setType()
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $_
     * @param string $type
     */
    public function __construct(\traveltainment\SOAP17\StructType\SimplePriceType $_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $_
     * @return \traveltainment\SOAP17\StructType\TransferPriceType
     */
    public function set_(\traveltainment\SOAP17\StructType\SimplePriceType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \traveltainment\SOAP17\EnumType\TransferPriceTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\TransferPriceTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \traveltainment\SOAP17\StructType\TransferPriceType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\TransferPriceTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \traveltainment\SOAP17\EnumType\TransferPriceTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TransferPriceType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
