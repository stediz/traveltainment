<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferGridElementType StructType
 * @subpackage Structs
 */
class HolidayHomeOfferGridElementType extends AbstractStructBase
{
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $value;
    /**
     * The Group
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType
     */
    public $Group;
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
     */
    public $Offer;
    /**
     * Constructor method for HolidayHomeOfferGridElementType
     * @uses HolidayHomeOfferGridElementType::setValue()
     * @uses HolidayHomeOfferGridElementType::setGroup()
     * @uses HolidayHomeOfferGridElementType::setOffer()
     * @param string $value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType $group
     * @param \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType $offer
     */
    public function __construct($value = null, \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType $group = null, \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType $offer = null)
    {
        $this
            ->setValue($value)
            ->setGroup($group)
            ->setOffer($offer);
    }
    /**
     * Get value value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get Group value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType $group
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType
     */
    public function setGroup(\traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType $group = null)
    {
        $this->Group = $group;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType $offer
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType
     */
    public function setOffer(\traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType
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
