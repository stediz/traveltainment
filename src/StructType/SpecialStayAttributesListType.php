<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialStayAttributesListType StructType
 * @subpackage Structs
 */
class SpecialStayAttributesListType extends AbstractStructBase
{
    /**
     * The SpecialStayAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $SpecialStayAttribute;
    /**
     * Constructor method for SpecialStayAttributesListType
     * @uses SpecialStayAttributesListType::setSpecialStayAttribute()
     * @param string[] $specialStayAttribute
     */
    public function __construct(array $specialStayAttribute = array())
    {
        $this
            ->setSpecialStayAttribute($specialStayAttribute);
    }
    /**
     * Get SpecialStayAttribute value
     * @return string[]|null
     */
    public function getSpecialStayAttribute()
    {
        return $this->SpecialStayAttribute;
    }
    /**
     * Set SpecialStayAttribute value
     * @uses \EnumType\SpecialStayAttribute::valueIsValid()
     * @uses \EnumType\SpecialStayAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialStayAttribute
     * @return \StructType\SpecialStayAttributesListType
     */
    public function setSpecialStayAttribute(array $specialStayAttribute = array())
    {
        $invalidValues = array();
        foreach ($specialStayAttribute as $specialStayAttributesListTypeSpecialStayAttributeItem) {
            if (!\EnumType\SpecialStayAttribute::valueIsValid($specialStayAttributesListTypeSpecialStayAttributeItem)) {
                $invalidValues[] = var_export($specialStayAttributesListTypeSpecialStayAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\SpecialStayAttribute::getValidValues())), __LINE__);
        }
        $this->SpecialStayAttribute = $specialStayAttribute;
        return $this;
    }
    /**
     * Add item to SpecialStayAttribute value
     * @uses \EnumType\SpecialStayAttribute::valueIsValid()
     * @uses \EnumType\SpecialStayAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SpecialStayAttributesListType
     */
    public function addToSpecialStayAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SpecialStayAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\SpecialStayAttribute::getValidValues())), __LINE__);
        }
        $this->SpecialStayAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SpecialStayAttributesListType
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
