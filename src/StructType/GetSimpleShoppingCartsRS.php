<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimpleShoppingCartsRS StructType
 * @subpackage Structs
 */
class GetSimpleShoppingCartsRS extends XmlInterfaceRS
{
    /**
     * The ShoppingCarts
     * @var \traveltainment\SOAP17\StructType\SimpleShoppingCartList
     */
    public $ShoppingCarts;
    /**
     * Constructor method for GetSimpleShoppingCartsRS
     * @uses GetSimpleShoppingCartsRS::setShoppingCarts()
     * @param \traveltainment\SOAP17\StructType\SimpleShoppingCartList $shoppingCarts
     */
    public function __construct(\traveltainment\SOAP17\StructType\SimpleShoppingCartList $shoppingCarts = null)
    {
        $this
            ->setShoppingCarts($shoppingCarts);
    }
    /**
     * Get ShoppingCarts value
     * @return \traveltainment\SOAP17\StructType\SimpleShoppingCartList|null
     */
    public function getShoppingCarts()
    {
        return $this->ShoppingCarts;
    }
    /**
     * Set ShoppingCarts value
     * @param \traveltainment\SOAP17\StructType\SimpleShoppingCartList $shoppingCarts
     * @return \traveltainment\SOAP17\StructType\GetSimpleShoppingCartsRS
     */
    public function setShoppingCarts(\traveltainment\SOAP17\StructType\SimpleShoppingCartList $shoppingCarts = null)
    {
        $this->ShoppingCarts = $shoppingCarts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetSimpleShoppingCartsRS
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
