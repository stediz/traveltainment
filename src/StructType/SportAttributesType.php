<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SportAttributesType StructType
 * @subpackage Structs
 */
class SportAttributesType extends AbstractStructBase
{
    /**
     * The SportAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SportAttribute;
    /**
     * Constructor method for SportAttributesType
     * @uses SportAttributesType::setSportAttribute()
     * @param string[] $sportAttribute
     */
    public function __construct(array $sportAttribute = array())
    {
        $this
            ->setSportAttribute($sportAttribute);
    }
    /**
     * Get SportAttribute value
     * @return string[]|null
     */
    public function getSportAttribute()
    {
        return $this->SportAttribute;
    }
    /**
     * Set SportAttribute value
     * @uses \traveltainment\SOAP17\EnumType\SportAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\SportAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $sportAttribute
     * @return \traveltainment\SOAP17\StructType\SportAttributesType
     */
    public function setSportAttribute(array $sportAttribute = array())
    {
        $invalidValues = array();
        foreach ($sportAttribute as $sportAttributesTypeSportAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\SportAttribute::valueIsValid($sportAttributesTypeSportAttributeItem)) {
                $invalidValues[] = var_export($sportAttributesTypeSportAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\SportAttribute::getValidValues())), __LINE__);
        }
        $this->SportAttribute = $sportAttribute;
        return $this;
    }
    /**
     * Add item to SportAttribute value
     * @uses \traveltainment\SOAP17\EnumType\SportAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\SportAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\SportAttributesType
     */
    public function addToSportAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\SportAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\SportAttribute::getValidValues())), __LINE__);
        }
        $this->SportAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SportAttributesType
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
