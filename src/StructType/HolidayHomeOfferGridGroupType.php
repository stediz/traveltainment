<?php

namespace StructType;

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
     * @var \StructType\HolidayHomeOfferGridElementType[]
     */
    public $Element;
    /**
     * Constructor method for HolidayHomeOfferGridGroupType
     * @uses HolidayHomeOfferGridGroupType::setCategory()
     * @uses HolidayHomeOfferGridGroupType::setElement()
     * @param string $category
     * @param \StructType\HolidayHomeOfferGridElementType[] $element
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
     * @uses \EnumType\HolidayHomeOfferGridGroupTypeEnum::valueIsValid()
     * @uses \EnumType\HolidayHomeOfferGridGroupTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \StructType\HolidayHomeOfferGridGroupType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\HolidayHomeOfferGridGroupTypeEnum::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $category, implode(', ', \EnumType\HolidayHomeOfferGridGroupTypeEnum::getValidValues())), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get Element value
     * @return \StructType\HolidayHomeOfferGridElementType[]|null
     */
    public function getElement()
    {
        return $this->Element;
    }
    /**
     * Set Element value
     * @throws \InvalidArgumentException
     * @param \StructType\HolidayHomeOfferGridElementType[] $element
     * @return \StructType\HolidayHomeOfferGridGroupType
     */
    public function setElement(array $element = array())
    {
        foreach ($element as $holidayHomeOfferGridGroupTypeElementItem) {
            // validation for constraint: itemType
            if (!$holidayHomeOfferGridGroupTypeElementItem instanceof \StructType\HolidayHomeOfferGridElementType) {
                throw new \InvalidArgumentException(sprintf('The Element property can only contain items of \StructType\HolidayHomeOfferGridElementType, "%s" given', is_object($holidayHomeOfferGridGroupTypeElementItem) ? get_class($holidayHomeOfferGridGroupTypeElementItem) : gettype($holidayHomeOfferGridGroupTypeElementItem)), __LINE__);
            }
        }
        $this->Element = $element;
        return $this;
    }
    /**
     * Add item to Element value
     * @throws \InvalidArgumentException
     * @param \StructType\HolidayHomeOfferGridElementType $item
     * @return \StructType\HolidayHomeOfferGridGroupType
     */
    public function addToElement(\StructType\HolidayHomeOfferGridElementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HolidayHomeOfferGridElementType) {
            throw new \InvalidArgumentException(sprintf('The Element property can only contain items of \StructType\HolidayHomeOfferGridElementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\HolidayHomeOfferGridGroupType
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
