<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewFamilyAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewFamilyAttributesType extends AbstractStructBase
{
    /**
     * The FamilyAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    public $FamilyAttribute;
    /**
     * Constructor method for HotelReviewFamilyAttributesType
     * @uses HotelReviewFamilyAttributesType::setFamilyAttribute()
     * @param string[] $familyAttribute
     */
    public function __construct(array $familyAttribute = array())
    {
        $this
            ->setFamilyAttribute($familyAttribute);
    }
    /**
     * Get FamilyAttribute value
     * @return string[]|null
     */
    public function getFamilyAttribute()
    {
        return $this->FamilyAttribute;
    }
    /**
     * Set FamilyAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $familyAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType
     */
    public function setFamilyAttribute(array $familyAttribute = array())
    {
        $invalidValues = array();
        foreach ($familyAttribute as $hotelReviewFamilyAttributesTypeFamilyAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::valueIsValid($hotelReviewFamilyAttributesTypeFamilyAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewFamilyAttributesTypeFamilyAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::getValidValues())), __LINE__);
        }
        $this->FamilyAttribute = $familyAttribute;
        return $this;
    }
    /**
     * Add item to FamilyAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType
     */
    public function addToFamilyAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewFamilyAttribute::getValidValues())), __LINE__);
        }
        $this->FamilyAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewFamilyAttributesType
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
