<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShoppingCartListSortingType StructType
 * @subpackage Structs
 */
class ShoppingCartListSortingType extends \EnumType\ShoppingCartSortCriteriaEnum
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Direction
     * @var string
     */
    public $Direction;
    /**
     * Constructor method for ShoppingCartListSortingType
     * @uses ShoppingCartListSortingType::set_()
     * @uses ShoppingCartListSortingType::setDirection()
     * @param string $_
     * @param string $direction
     */
    public function __construct($_ = null, $direction = null)
    {
        $this
            ->set_($_)
            ->setDirection($direction);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @uses \EnumType\ShoppingCartSortCriteriaEnum::valueIsValid()
     * @uses \EnumType\ShoppingCartSortCriteriaEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \StructType\ShoppingCartListSortingType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShoppingCartSortCriteriaEnum::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \EnumType\ShoppingCartSortCriteriaEnum::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \EnumType\SortDirectionEnum::valueIsValid()
     * @uses \EnumType\SortDirectionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $direction
     * @return \StructType\ShoppingCartListSortingType
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SortDirectionEnum::valueIsValid($direction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $direction, implode(', ', \EnumType\SortDirectionEnum::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShoppingCartListSortingType
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
