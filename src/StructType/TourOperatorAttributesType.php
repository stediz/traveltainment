<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourOperatorAttributesType StructType
 * @subpackage Structs
 */
class TourOperatorAttributesType extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Attribute;
    /**
     * Constructor method for TourOperatorAttributesType
     * @uses TourOperatorAttributesType::setAttribute()
     * @param string[] $attribute
     */
    public function __construct(array $attribute = array())
    {
        $this
            ->setAttribute($attribute);
    }
    /**
     * Get Attribute value
     * @return string[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @uses \traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attribute
     * @return \traveltainment\SOAP17\StructType\TourOperatorAttributesType
     */
    public function setAttribute(array $attribute = array())
    {
        $invalidValues = array();
        foreach ($attribute as $tourOperatorAttributesTypeAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::valueIsValid($tourOperatorAttributesTypeAttributeItem)) {
                $invalidValues[] = var_export($tourOperatorAttributesTypeAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::getValidValues())), __LINE__);
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @uses \traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\TourOperatorAttributesType
     */
    public function addToAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\TourOperatorAttributeEnum::getValidValues())), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\TourOperatorAttributesType
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
