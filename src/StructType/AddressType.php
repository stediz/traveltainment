<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * @subpackage Structs
 */
class AddressType extends AddressBaseType
{
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The LocationType
     * @var string
     */
    public $LocationType;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setStatus()
     * @uses AddressType::setLocationType()
     * @param string $status
     * @param string $locationType
     */
    public function __construct($status = null, $locationType = null)
    {
        $this
            ->setStatus($status)
            ->setLocationType($locationType);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\AddressStatusEnum::valueIsValid()
     * @uses \EnumType\AddressStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\AddressType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddressStatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \EnumType\AddressStatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \EnumType\UseLocationTypeEnum::valueIsValid()
     * @uses \EnumType\UseLocationTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationType
     * @return \StructType\AddressType
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\UseLocationTypeEnum::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationType, implode(', ', \EnumType\UseLocationTypeEnum::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddressType
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
