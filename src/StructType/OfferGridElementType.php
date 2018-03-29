<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferGridElementType StructType
 * @subpackage Structs
 */
class OfferGridElementType extends AbstractStructBase
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
     * @var \StructType\OfferGridGroupType
     */
    public $Group;
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ReducedOfferType
     */
    public $Offer;
    /**
     * Constructor method for OfferGridElementType
     * @uses OfferGridElementType::setValue()
     * @uses OfferGridElementType::setGroup()
     * @uses OfferGridElementType::setOffer()
     * @param string $value
     * @param \StructType\OfferGridGroupType $group
     * @param \StructType\ReducedOfferType $offer
     */
    public function __construct($value = null, \StructType\OfferGridGroupType $group = null, \StructType\ReducedOfferType $offer = null)
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
     * @return \StructType\OfferGridElementType
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
     * @return \StructType\OfferGridGroupType|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \StructType\OfferGridGroupType $group
     * @return \StructType\OfferGridElementType
     */
    public function setGroup(\StructType\OfferGridGroupType $group = null)
    {
        $this->Group = $group;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\ReducedOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\ReducedOfferType $offer
     * @return \StructType\OfferGridElementType
     */
    public function setOffer(\StructType\ReducedOfferType $offer = null)
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
     * @return \StructType\OfferGridElementType
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
