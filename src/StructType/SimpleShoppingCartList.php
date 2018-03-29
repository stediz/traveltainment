<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleShoppingCartList StructType
 * @subpackage Structs
 */
class SimpleShoppingCartList extends AbstractStructBase
{
    /**
     * The ShoppingCart
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\SimpleShoppingCart[]
     */
    public $ShoppingCart;
    /**
     * Constructor method for SimpleShoppingCartList
     * @uses SimpleShoppingCartList::setShoppingCart()
     * @param \StructType\SimpleShoppingCart[] $shoppingCart
     */
    public function __construct(array $shoppingCart = array())
    {
        $this
            ->setShoppingCart($shoppingCart);
    }
    /**
     * Get ShoppingCart value
     * @return \StructType\SimpleShoppingCart[]|null
     */
    public function getShoppingCart()
    {
        return $this->ShoppingCart;
    }
    /**
     * Set ShoppingCart value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleShoppingCart[] $shoppingCart
     * @return \StructType\SimpleShoppingCartList
     */
    public function setShoppingCart(array $shoppingCart = array())
    {
        foreach ($shoppingCart as $simpleShoppingCartListShoppingCartItem) {
            // validation for constraint: itemType
            if (!$simpleShoppingCartListShoppingCartItem instanceof \StructType\SimpleShoppingCart) {
                throw new \InvalidArgumentException(sprintf('The ShoppingCart property can only contain items of \StructType\SimpleShoppingCart, "%s" given', is_object($simpleShoppingCartListShoppingCartItem) ? get_class($simpleShoppingCartListShoppingCartItem) : gettype($simpleShoppingCartListShoppingCartItem)), __LINE__);
            }
        }
        $this->ShoppingCart = $shoppingCart;
        return $this;
    }
    /**
     * Add item to ShoppingCart value
     * @throws \InvalidArgumentException
     * @param \StructType\SimpleShoppingCart $item
     * @return \StructType\SimpleShoppingCartList
     */
    public function addToShoppingCart(\StructType\SimpleShoppingCart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SimpleShoppingCart) {
            throw new \InvalidArgumentException(sprintf('The ShoppingCart property can only contain items of \StructType\SimpleShoppingCart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShoppingCart[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SimpleShoppingCartList
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
