<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingEngineTypeType StructType
 * @subpackage Structs
 */
class BookingEngineTypeType extends \traveltainment\SOAP17\EnumType\OfferDefinitionType
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The ExclusiveData
     * @var bool
     */
    public $ExclusiveData;
    /**
     * Constructor method for BookingEngineTypeType
     * @uses BookingEngineTypeType::set_()
     * @uses BookingEngineTypeType::setExclusiveData()
     * @param string $_
     * @param bool $exclusiveData
     */
    public function __construct($_ = null, $exclusiveData = null)
    {
        $this
            ->set_($_)
            ->setExclusiveData($exclusiveData);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @uses \traveltainment\SOAP17\EnumType\OfferDefinitionType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OfferDefinitionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \traveltainment\SOAP17\StructType\BookingEngineTypeType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\OfferDefinitionType::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \traveltainment\SOAP17\EnumType\OfferDefinitionType::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get ExclusiveData value
     * @return bool|null
     */
    public function getExclusiveData()
    {
        return $this->ExclusiveData;
    }
    /**
     * Set ExclusiveData value
     * @param bool $exclusiveData
     * @return \traveltainment\SOAP17\StructType\BookingEngineTypeType
     */
    public function setExclusiveData($exclusiveData = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclusiveData) && !is_bool($exclusiveData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclusiveData)), __LINE__);
        }
        $this->ExclusiveData = $exclusiveData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BookingEngineTypeType
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
