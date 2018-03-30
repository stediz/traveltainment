<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WellnessAttributesType StructType
 * @subpackage Structs
 */
class WellnessAttributesType extends AbstractStructBase
{
    /**
     * The WellnessAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $WellnessAttribute;
    /**
     * Constructor method for WellnessAttributesType
     * @uses WellnessAttributesType::setWellnessAttribute()
     * @param string[] $wellnessAttribute
     */
    public function __construct(array $wellnessAttribute = array())
    {
        $this
            ->setWellnessAttribute($wellnessAttribute);
    }
    /**
     * Get WellnessAttribute value
     * @return string[]|null
     */
    public function getWellnessAttribute()
    {
        return $this->WellnessAttribute;
    }
    /**
     * Set WellnessAttribute value
     * @uses \traveltainment\SOAP17\EnumType\WellnessAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\WellnessAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $wellnessAttribute
     * @return \traveltainment\SOAP17\StructType\WellnessAttributesType
     */
    public function setWellnessAttribute(array $wellnessAttribute = array())
    {
        $invalidValues = array();
        foreach ($wellnessAttribute as $wellnessAttributesTypeWellnessAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\WellnessAttribute::valueIsValid($wellnessAttributesTypeWellnessAttributeItem)) {
                $invalidValues[] = var_export($wellnessAttributesTypeWellnessAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\WellnessAttribute::getValidValues())), __LINE__);
        }
        $this->WellnessAttribute = $wellnessAttribute;
        return $this;
    }
    /**
     * Add item to WellnessAttribute value
     * @uses \traveltainment\SOAP17\EnumType\WellnessAttribute::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\WellnessAttribute::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\WellnessAttributesType
     */
    public function addToWellnessAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\WellnessAttribute::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\WellnessAttribute::getValidValues())), __LINE__);
        }
        $this->WellnessAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\WellnessAttributesType
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
