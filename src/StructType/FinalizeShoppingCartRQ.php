<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinalizeShoppingCartRQ StructType
 * @subpackage Structs
 */
class FinalizeShoppingCartRQ extends XmlInterfaceRQ
{
    /**
     * The ShoppingCartID
     * @var string
     */
    public $ShoppingCartID;
    /**
     * Constructor method for FinalizeShoppingCartRQ
     * @uses FinalizeShoppingCartRQ::setShoppingCartID()
     * @param string $shoppingCartID
     */
    public function __construct($shoppingCartID = null)
    {
        $this
            ->setShoppingCartID($shoppingCartID);
    }
    /**
     * Get ShoppingCartID value
     * @return string|null
     */
    public function getShoppingCartID()
    {
        return $this->ShoppingCartID;
    }
    /**
     * Set ShoppingCartID value
     * @param string $shoppingCartID
     * @return \StructType\FinalizeShoppingCartRQ
     */
    public function setShoppingCartID($shoppingCartID = null)
    {
        // validation for constraint: string
        if (!is_null($shoppingCartID) && !is_string($shoppingCartID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shoppingCartID)), __LINE__);
        }
        $this->ShoppingCartID = $shoppingCartID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FinalizeShoppingCartRQ
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
