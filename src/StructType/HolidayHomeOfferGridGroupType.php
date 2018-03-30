<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferGridGroupType StructType
 * @subpackage Structs
 */
class HolidayHomeOfferGridGroupType extends AbstractStructBase
{
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $category;
    /**
     * The Element
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType[]
     */
    public $Element;
    /**
     * Constructor method for HolidayHomeOfferGridGroupType
     * @uses HolidayHomeOfferGridGroupType::setCategory()
     * @uses HolidayHomeOfferGridGroupType::setElement()
     * @param string $category
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType[] $element
     */
    public function __construct($category = null, array $element = array())
    {
        $this
            ->setCategory($category)
            ->setElement($element);
    }
    /**
     * Get category value
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeOfferGridGroupTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\HolidayHomeOfferGridGroupTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\HolidayHomeOfferGridGroupTypeEnum::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $category, implode(', ', \traveltainment\SOAP17\EnumType\HolidayHomeOfferGridGroupTypeEnum::getValidValues())), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get Element value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType[]|null
     */
    public function getElement()
    {
        return $this->Element;
    }
    /**
     * Set Element value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType[] $element
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType
     */
    public function setElement(array $element = array())
    {
        foreach ($element as $holidayHomeOfferGridGroupTypeElementItem) {
            // validation for constraint: itemType
            if (!$holidayHomeOfferGridGroupTypeElementItem instanceof \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType) {
                throw new \InvalidArgumentException(sprintf('The Element property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType, "%s" given', is_object($holidayHomeOfferGridGroupTypeElementItem) ? get_class($holidayHomeOfferGridGroupTypeElementItem) : gettype($holidayHomeOfferGridGroupTypeElementItem)), __LINE__);
            }
        }
        $this->Element = $element;
        return $this;
    }
    /**
     * Add item to Element value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType $item
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType
     */
    public function addToElement(\traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType) {
            throw new \InvalidArgumentException(sprintf('The Element property can only contain items of \traveltainment\SOAP17\StructType\HolidayHomeOfferGridElementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Element[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferGridGroupType
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
