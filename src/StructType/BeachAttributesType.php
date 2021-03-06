<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BeachAttributesType StructType
 * @subpackage Structs
 */
class BeachAttributesType extends AbstractStructBase
{
    /**
     * The BeachAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $BeachAttribute;
    /**
     * Constructor method for BeachAttributesType
     * @uses BeachAttributesType::setBeachAttribute()
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
     * @uses \EnumType\BeachAttribute::valueIsValid()
     * @uses \EnumType\BeachAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $beachAttribute
     * @return \StructType\BeachAttributesType
     */
    public function setBeachAttribute(array $beachAttribute = array())
    {
        $invalidValues = array();
        foreach ($beachAttribute as $beachAttributesTypeBeachAttributeItem) {
            if (!\EnumType\BeachAttribute::valueIsValid($beachAttributesTypeBeachAttributeItem)) {
                $invalidValues[] = var_export($beachAttributesTypeBeachAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\BeachAttribute::getValidValues())), __LINE__);
        }
        $this->BeachAttribute = $beachAttribute;
        return $this;
    }
    /**
     * Add item to BeachAttribute value
     * @uses \EnumType\BeachAttribute::valueIsValid()
     * @uses \EnumType\BeachAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\BeachAttributesType
     */
    public function addToBeachAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BeachAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\BeachAttribute::getValidValues())), __LINE__);
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
     * @return \StructType\BeachAttributesType
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
