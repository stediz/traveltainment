<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonFetchRQ StructType
 * @subpackage Structs
 */
class AddonFetchRQ extends XmlInterfaceRQ
{
    /**
     * The ShoppingCartId
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $ShoppingCartId;
    /**
     * The AddonId
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $AddonId;
    /**
     * Constructor method for AddonFetchRQ
     * @uses AddonFetchRQ::setShoppingCartId()
     * @uses AddonFetchRQ::setAddonId()
     * @param string $shoppingCartId
     * @param string $addonId
     */
    public function __construct($shoppingCartId = null, $addonId = null)
    {
        $this
            ->setShoppingCartId($shoppingCartId)
            ->setAddonId($addonId);
    }
    /**
     * Get ShoppingCartId value
     * @return string|null
     */
    public function getShoppingCartId()
    {
        return $this->ShoppingCartId;
    }
    /**
     * Set ShoppingCartId value
     * @param string $shoppingCartId
     * @return \traveltainment\SOAP17\StructType\AddonFetchRQ
     */
    public function setShoppingCartId($shoppingCartId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($shoppingCartId) && strlen($shoppingCartId) > 64) || (is_array($shoppingCartId) && count($shoppingCartId) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($shoppingCartId) ? strlen($shoppingCartId) : count($shoppingCartId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($shoppingCartId) && !is_string($shoppingCartId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shoppingCartId)), __LINE__);
        }
        $this->ShoppingCartId = $shoppingCartId;
        return $this;
    }
    /**
     * Get AddonId value
     * @return string|null
     */
    public function getAddonId()
    {
        return $this->AddonId;
    }
    /**
     * Set AddonId value
     * @param string $addonId
     * @return \traveltainment\SOAP17\StructType\AddonFetchRQ
     */
    public function setAddonId($addonId = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($addonId) && strlen($addonId) > 64) || (is_array($addonId) && count($addonId) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($addonId) ? strlen($addonId) : count($addonId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($addonId) && !is_string($addonId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addonId)), __LINE__);
        }
        $this->AddonId = $addonId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonFetchRQ
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
