<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewPoolAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewPoolAttributesType extends AbstractStructBase
{
    /**
     * The PoolAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var string[]
     */
    public $PoolAttribute;
    /**
     * Constructor method for HotelReviewPoolAttributesType
     * @uses HotelReviewPoolAttributesType::setPoolAttribute()
     * @param string[] $poolAttribute
     */
    public function __construct(array $poolAttribute = array())
    {
        $this
            ->setPoolAttribute($poolAttribute);
    }
    /**
     * Get PoolAttribute value
     * @return string[]|null
     */
    public function getPoolAttribute()
    {
        return $this->PoolAttribute;
    }
    /**
     * Set PoolAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $poolAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType
     */
    public function setPoolAttribute(array $poolAttribute = array())
    {
        $invalidValues = array();
        foreach ($poolAttribute as $hotelReviewPoolAttributesTypePoolAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::valueIsValid($hotelReviewPoolAttributesTypePoolAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewPoolAttributesTypePoolAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::getValidValues())), __LINE__);
        }
        $this->PoolAttribute = $poolAttribute;
        return $this;
    }
    /**
     * Add item to PoolAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType
     */
    public function addToPoolAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewPoolAttribute::getValidValues())), __LINE__);
        }
        $this->PoolAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewPoolAttributesType
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
