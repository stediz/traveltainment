<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimpleShoppingCartsRQ StructType
 * @subpackage Structs
 */
class GetSimpleShoppingCartsRQ extends XmlInterfaceRQ
{
    /**
     * The Filter
     * @var \StructType\FilterType
     */
    public $Filter;
    /**
     * The Options
     * @var \StructType\ShoppingCartListOptionsType
     */
    public $Options;
    /**
     * Constructor method for GetSimpleShoppingCartsRQ
     * @uses GetSimpleShoppingCartsRQ::setFilter()
     * @uses GetSimpleShoppingCartsRQ::setOptions()
     * @param \StructType\FilterType $filter
     * @param \StructType\ShoppingCartListOptionsType $options
     */
    public function __construct(\StructType\FilterType $filter = null, \StructType\ShoppingCartListOptionsType $options = null)
    {
        $this
            ->setFilter($filter)
            ->setOptions($options);
    }
    /**
     * Get Filter value
     * @return \StructType\FilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \StructType\FilterType $filter
     * @return \StructType\GetSimpleShoppingCartsRQ
     */
    public function setFilter(\StructType\FilterType $filter = null)
    {
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Get Options value
     * @return \StructType\ShoppingCartListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\ShoppingCartListOptionsType $options
     * @return \StructType\GetSimpleShoppingCartsRQ
     */
    public function setOptions(\StructType\ShoppingCartListOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetSimpleShoppingCartsRQ
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
