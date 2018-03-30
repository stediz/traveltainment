<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonFetchType StructType
 * @subpackage Structs
 */
class AddonFetchType extends AbstractStructBase
{
    /**
     * The AddonId
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $AddonId;
    /**
     * The ShoppingCartId
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $ShoppingCartId;
    /**
     * The MiscInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AddonMiscInfoType
     */
    public $MiscInfos;
    /**
     * The UID
     * @var string
     */
    public $UID;
    /**
     * Constructor method for AddonFetchType
     * @uses AddonFetchType::setAddonId()
     * @uses AddonFetchType::setShoppingCartId()
     * @uses AddonFetchType::setMiscInfos()
     * @uses AddonFetchType::setUID()
     * @param string $addonId
     * @param string $shoppingCartId
     * @param \traveltainment\SOAP17\StructType\AddonMiscInfoType $miscInfos
     * @param string $uID
     */
    public function __construct($addonId = null, $shoppingCartId = null, \traveltainment\SOAP17\StructType\AddonMiscInfoType $miscInfos = null, $uID = null)
    {
        $this
            ->setAddonId($addonId)
            ->setShoppingCartId($shoppingCartId)
            ->setMiscInfos($miscInfos)
            ->setUID($uID);
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
     * @return \traveltainment\SOAP17\StructType\AddonFetchType
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
     * @return \traveltainment\SOAP17\StructType\AddonFetchType
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
     * Get MiscInfos value
     * @return \traveltainment\SOAP17\StructType\AddonMiscInfoType|null
     */
    public function getMiscInfos()
    {
        return $this->MiscInfos;
    }
    /**
     * Set MiscInfos value
     * @param \traveltainment\SOAP17\StructType\AddonMiscInfoType $miscInfos
     * @return \traveltainment\SOAP17\StructType\AddonFetchType
     */
    public function setMiscInfos(\traveltainment\SOAP17\StructType\AddonMiscInfoType $miscInfos = null)
    {
        $this->MiscInfos = $miscInfos;
        return $this;
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \traveltainment\SOAP17\StructType\AddonFetchType
     */
    public function setUID($uID = null)
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonFetchType
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
