<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReviewSkiOpportunitiesAttributesType StructType
 * @subpackage Structs
 */
class HotelReviewSkiOpportunitiesAttributesType extends AbstractStructBase
{
    /**
     * The SkiOpportunitiesAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var string[]
     */
    public $SkiOpportunitiesAttribute;
    /**
     * Constructor method for HotelReviewSkiOpportunitiesAttributesType
     * @uses HotelReviewSkiOpportunitiesAttributesType::setSkiOpportunitiesAttribute()
     * @param string[] $skiOpportunitiesAttribute
     */
    public function __construct(array $skiOpportunitiesAttribute = array())
    {
        $this
            ->setSkiOpportunitiesAttribute($skiOpportunitiesAttribute);
    }
    /**
     * Get SkiOpportunitiesAttribute value
     * @return string[]|null
     */
    public function getSkiOpportunitiesAttribute()
    {
        return $this->SkiOpportunitiesAttribute;
    }
    /**
     * Set SkiOpportunitiesAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $skiOpportunitiesAttribute
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType
     */
    public function setSkiOpportunitiesAttribute(array $skiOpportunitiesAttribute = array())
    {
        $invalidValues = array();
        foreach ($skiOpportunitiesAttribute as $hotelReviewSkiOpportunitiesAttributesTypeSkiOpportunitiesAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::valueIsValid($hotelReviewSkiOpportunitiesAttributesTypeSkiOpportunitiesAttributeItem)) {
                $invalidValues[] = var_export($hotelReviewSkiOpportunitiesAttributesTypeSkiOpportunitiesAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::getValidValues())), __LINE__);
        }
        $this->SkiOpportunitiesAttribute = $skiOpportunitiesAttribute;
        return $this;
    }
    /**
     * Add item to SkiOpportunitiesAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType
     */
    public function addToSkiOpportunitiesAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HotelReviewSkiOpportunitiesAttribute::getValidValues())), __LINE__);
        }
        $this->SkiOpportunitiesAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HotelReviewSkiOpportunitiesAttributesType
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
