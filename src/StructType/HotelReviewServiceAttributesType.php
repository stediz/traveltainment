<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewServiceAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewServiceAttributesType extends AbstractStructBase
{
    /**
     * The ServiceAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var string[]
     */
    public $ServiceAttribute;
    /**
     * Constructor method for HotelReviewServiceAttributesType
     * @uses HotelReviewServiceAttributesType::setServiceAttribute()
     * @param string[] $serviceAttribute
     */
    public function __construct(array $serviceAttribute = array())
    {
        $this
            ->setServiceAttribute($serviceAttribute);
    }
    /**
     * Get ServiceAttribute value
     * @return string[]|null
     */
    public function getServiceAttribute()
    {
        return $this->ServiceAttribute;
    }
    /**
     * Set ServiceAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $serviceAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType
     */
    public function setServiceAttribute(array $serviceAttribute = array())
    {
        $invalidValues = array();
        foreach ($serviceAttribute as $hotelReviewServiceAttributesTypeServiceAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::valueIsValid($hotelReviewServiceAttributesTypeServiceAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewServiceAttributesTypeServiceAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::getValidValues())), __LINE__);
        }
        $this->ServiceAttribute = $serviceAttribute;
        return $this;
    }
    /**
     * Add item to ServiceAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType
     */
    public function addToServiceAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewServiceAttribute::getValidValues())), __LINE__);
        }
        $this->ServiceAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewServiceAttributesType
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
