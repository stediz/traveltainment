<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewCultureAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewCultureAttributesType extends AbstractStructBase
{
    /**
     * The CultureAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * @var string[]
     */
    public $CultureAttribute;
    /**
     * Constructor method for HotelReviewCultureAttributesType
     * @uses HotelReviewCultureAttributesType::setCultureAttribute()
     * @param string[] $cultureAttribute
     */
    public function __construct(array $cultureAttribute = array())
    {
        $this
            ->setCultureAttribute($cultureAttribute);
    }
    /**
     * Get CultureAttribute value
     * @return string[]|null
     */
    public function getCultureAttribute()
    {
        return $this->CultureAttribute;
    }
    /**
     * Set CultureAttribute value
     * @uses \EnumType\HotelReviewCultureAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewCultureAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $cultureAttribute
     * @return \StructType\HotelReviewCultureAttributesType
     */
    public function setCultureAttribute(array $cultureAttribute = array())
    {
        $invalidValues = array();
        foreach ($cultureAttribute as $hotelReviewCultureAttributesTypeCultureAttributeItem) {
            if (!\EnumType\HotelReviewCultureAttribute::valueIsValid($hotelReviewCultureAttributesTypeCultureAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewCultureAttributesTypeCultureAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\HotelReviewCultureAttribute::getValidValues())), __LINE__);
        }
        $this->CultureAttribute = $cultureAttribute;
        return $this;
    }
    /**
     * Add item to CultureAttribute value
     * @uses \EnumType\HotelReviewCultureAttribute::valueIsValid()
     * @uses \EnumType\HotelReviewCultureAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\HotelReviewCultureAttributesType
     */
    public function addToCultureAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HotelReviewCultureAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\HotelReviewCultureAttribute::getValidValues())), __LINE__);
        }
        $this->CultureAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HotelReviewCultureAttributesType
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
