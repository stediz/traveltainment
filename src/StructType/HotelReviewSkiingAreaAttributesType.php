<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewSkiingAreaAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewSkiingAreaAttributesType extends AbstractStructBase
{
    /**
     * The SkiingAreaAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var string[]
     */
    public $SkiingAreaAttribute;
    /**
     * Constructor method for HotelReviewSkiingAreaAttributesType
     * @uses HotelReviewSkiingAreaAttributesType::setSkiingAreaAttribute()
     * @param string[] $skiingAreaAttribute
     */
    public function __construct(array $skiingAreaAttribute = array())
    {
        $this
            ->setSkiingAreaAttribute($skiingAreaAttribute);
    }
    /**
     * Get SkiingAreaAttribute value
     * @return string[]|null
     */
    public function getSkiingAreaAttribute()
    {
        return $this->SkiingAreaAttribute;
    }
    /**
     * Set SkiingAreaAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $skiingAreaAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType
     */
    public function setSkiingAreaAttribute(array $skiingAreaAttribute = array())
    {
        $invalidValues = array();
        foreach ($skiingAreaAttribute as $hotelReviewSkiingAreaAttributesTypeSkiingAreaAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::valueIsValid($hotelReviewSkiingAreaAttributesTypeSkiingAreaAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewSkiingAreaAttributesTypeSkiingAreaAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::getValidValues())), __LINE__);
        }
        $this->SkiingAreaAttribute = $skiingAreaAttribute;
        return $this;
    }
    /**
     * Add item to SkiingAreaAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType
     */
    public function addToSkiingAreaAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewSkiingAreaAttribute::getValidValues())), __LINE__);
        }
        $this->SkiingAreaAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiingAreaAttributesType
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
