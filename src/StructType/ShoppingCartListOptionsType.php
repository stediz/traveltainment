<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShoppingCartListOptionsType StructType
 * @subpackage Structs
 */
class ShoppingCartListOptionsType extends OptionsType
{
    /**
     * The ShoppingCartListSortingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ShoppingCartListSortingType
     */
    public $ShoppingCartListSortingType;
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * Constructor method for ShoppingCartListOptionsType
     * @uses ShoppingCartListOptionsType::setShoppingCartListSortingType()
     * @uses ShoppingCartListOptionsType::setAdditionalCurrencies()
     * @param \StructType\ShoppingCartListSortingType $shoppingCartListSortingType
     * @param string $additionalCurrencies
     */
    public function __construct(\StructType\ShoppingCartListSortingType $shoppingCartListSortingType = null, $additionalCurrencies = null)
    {
        $this
            ->setShoppingCartListSortingType($shoppingCartListSortingType)
            ->setAdditionalCurrencies($additionalCurrencies);
    }
    /**
     * Get ShoppingCartListSortingType value
     * @return \StructType\ShoppingCartListSortingType|null
     */
    public function getShoppingCartListSortingType()
    {
        return $this->ShoppingCartListSortingType;
    }
    /**
     * Set ShoppingCartListSortingType value
     * @param \StructType\ShoppingCartListSortingType $shoppingCartListSortingType
     * @return \StructType\ShoppingCartListOptionsType
     */
    public function setShoppingCartListSortingType(\StructType\ShoppingCartListSortingType $shoppingCartListSortingType = null)
    {
        $this->ShoppingCartListSortingType = $shoppingCartListSortingType;
        return $this;
    }
    /**
     * Get AdditionalCurrencies value
     * @return string|null
     */
    public function getAdditionalCurrencies()
    {
        return $this->AdditionalCurrencies;
    }
    /**
     * Set AdditionalCurrencies value
     * @param string $additionalCurrencies
     * @return \StructType\ShoppingCartListOptionsType
     */
    public function setAdditionalCurrencies($additionalCurrencies = null)
    {
        // validation for constraint: string
        if (!is_null($additionalCurrencies) && !is_string($additionalCurrencies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalCurrencies)), __LINE__);
        }
        $this->AdditionalCurrencies = $additionalCurrencies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShoppingCartListOptionsType
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
