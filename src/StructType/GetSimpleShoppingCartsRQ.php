<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimpleShoppingCartsRQ StructType
 * @subpackage Structs
 */
class GetSimpleShoppingCartsRQ extends XmlInterfaceRQ
{
    /**
     * The Filter
     * @var \traveltainment\SOAP17\StructType\FilterType
     */
    public $Filter;
    /**
     * The Options
     * @var \traveltainment\SOAP17\StructType\ShoppingCartListOptionsType
     */
    public $Options;
    /**
     * Constructor method for GetSimpleShoppingCartsRQ
     * @uses GetSimpleShoppingCartsRQ::setFilter()
     * @uses GetSimpleShoppingCartsRQ::setOptions()
     * @param \traveltainment\SOAP17\StructType\FilterType $filter
     * @param \traveltainment\SOAP17\StructType\ShoppingCartListOptionsType $options
     */
    public function __construct(\traveltainment\SOAP17\StructType\FilterType $filter = null, \traveltainment\SOAP17\StructType\ShoppingCartListOptionsType $options = null)
    {
        $this
            ->setFilter($filter)
            ->setOptions($options);
    }
    /**
     * Get Filter value
     * @return \traveltainment\SOAP17\StructType\FilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \traveltainment\SOAP17\StructType\FilterType $filter
     * @return \traveltainment\SOAP17\StructType\GetSimpleShoppingCartsRQ
     */
    public function setFilter(\traveltainment\SOAP17\StructType\FilterType $filter = null)
    {
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\ShoppingCartListOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\ShoppingCartListOptionsType $options
     * @return \traveltainment\SOAP17\StructType\GetSimpleShoppingCartsRQ
     */
    public function setOptions(\traveltainment\SOAP17\StructType\ShoppingCartListOptionsType $options = null)
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
     * @return \traveltainment\SOAP17\StructType\GetSimpleShoppingCartsRQ
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
