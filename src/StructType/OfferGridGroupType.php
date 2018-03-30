<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferGridGroupType StructType
 * @subpackage Structs
 */
class OfferGridGroupType extends AbstractStructBase
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
     * @var \traveltainment\SOAP17\StructType\OfferGridElementType[]
     */
    public $Element;
    /**
     * Constructor method for OfferGridGroupType
     * @uses OfferGridGroupType::setCategory()
     * @uses OfferGridGroupType::setElement()
     * @param string $category
     * @param \traveltainment\SOAP17\StructType\OfferGridElementType[] $element
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
     * @uses \traveltainment\SOAP17\EnumType\OfferGridGroupTypeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OfferGridGroupTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \traveltainment\SOAP17\StructType\OfferGridGroupType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\OfferGridGroupTypeEnum::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $category, implode(', ', \traveltainment\SOAP17\EnumType\OfferGridGroupTypeEnum::getValidValues())), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get Element value
     * @return \traveltainment\SOAP17\StructType\OfferGridElementType[]|null
     */
    public function getElement()
    {
        return $this->Element;
    }
    /**
     * Set Element value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\OfferGridElementType[] $element
     * @return \traveltainment\SOAP17\StructType\OfferGridGroupType
     */
    public function setElement(array $element = array())
    {
        foreach ($element as $offerGridGroupTypeElementItem) {
            // validation for constraint: itemType
            if (!$offerGridGroupTypeElementItem instanceof \traveltainment\SOAP17\StructType\OfferGridElementType) {
                throw new \InvalidArgumentException(sprintf('The Element property can only contain items of \traveltainment\SOAP17\StructType\OfferGridElementType, "%s" given', is_object($offerGridGroupTypeElementItem) ? get_class($offerGridGroupTypeElementItem) : gettype($offerGridGroupTypeElementItem)), __LINE__);
            }
        }
        $this->Element = $element;
        return $this;
    }
    /**
     * Add item to Element value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\OfferGridElementType $item
     * @return \traveltainment\SOAP17\StructType\OfferGridGroupType
     */
    public function addToElement(\traveltainment\SOAP17\StructType\OfferGridElementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\OfferGridElementType) {
            throw new \InvalidArgumentException(sprintf('The Element property can only contain items of \traveltainment\SOAP17\StructType\OfferGridElementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\OfferGridGroupType
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
