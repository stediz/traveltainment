<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeAttributesType StructType
 * @subpackage Structs
 */
class HolidayHomeAttributesType extends AbstractStructBase
{
    /**
     * The HolidayHomeAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $HolidayHomeAttribute;
    /**
     * Constructor method for HolidayHomeAttributesType
     * @uses HolidayHomeAttributesType::setHolidayHomeAttribute()
     * @param string[] $holidayHomeAttribute
     */
    public function __construct(array $holidayHomeAttribute = array())
    {
        $this
            ->setHolidayHomeAttribute($holidayHomeAttribute);
    }
    /**
     * Get HolidayHomeAttribute value
     * @return string[]|null
     */
    public function getHolidayHomeAttribute()
    {
        return $this->HolidayHomeAttribute;
    }
    /**
     * Set HolidayHomeAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $holidayHomeAttribute
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAttributesType
     */
    public function setHolidayHomeAttribute(array $holidayHomeAttribute = array())
    {
        $invalidValues = array();
        foreach ($holidayHomeAttribute as $holidayHomeAttributesTypeHolidayHomeAttributeItem) {
            if (!\traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::valueIsValid($holidayHomeAttributesTypeHolidayHomeAttributeItem)) {
                $invalidValues[] = var_export($holidayHomeAttributesTypeHolidayHomeAttributeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::getValidValues())), __LINE__);
        }
        $this->HolidayHomeAttribute = $holidayHomeAttribute;
        return $this;
    }
    /**
     * Add item to HolidayHomeAttribute value
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAttributesType
     */
    public function addToHolidayHomeAttribute($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\HolidayHomeAttributeEnum::getValidValues())), __LINE__);
        }
        $this->HolidayHomeAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAttributesType
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
