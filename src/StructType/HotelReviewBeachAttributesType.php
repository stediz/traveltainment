<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewBeachAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewBeachAttributesType extends AbstractStructBase
{
    /**
     * The BeachAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $BeachAttribute;
    /**
     * Constructor method for HotelReviewBeachAttributesType
     * @uses HotelReviewBeachAttributesType::setBeachAttribute()
     * @param string[] $beachAttribute
     */
    public function __construct(array $beachAttribute = array())
    {
        $this
            ->setBeachAttribute($beachAttribute);
    }
    /**
     * Get BeachAttribute value
     * @return string[]|null
     */
    public function getBeachAttribute()
    {
        return $this->BeachAttribute;
    }
    /**
     * Set BeachAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $beachAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType
     */
    public function setBeachAttribute(array $beachAttribute = array())
    {
        $invalidValues = array();
        foreach ($beachAttribute as $hotelReviewBeachAttributesTypeBeachAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::valueIsValid($hotelReviewBeachAttributesTypeBeachAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewBeachAttributesTypeBeachAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::getValidValues())), __LINE__);
        }
        $this->BeachAttribute = $beachAttribute;
        return $this;
    }
    /**
     * Add item to BeachAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType
     */
    public function addToBeachAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewBeachAttribute::getValidValues())), __LINE__);
        }
        $this->BeachAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewBeachAttributesType
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
