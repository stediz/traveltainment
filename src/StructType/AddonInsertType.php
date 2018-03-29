<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonInsertType StructType
 * @subpackage Structs
 */
class AddonInsertType extends AbstractStructBase
{
    /**
     * The AddonType
     * @var string
     */
    public $AddonType;
    /**
     * The ShoppingCartId
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $ShoppingCartId;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationDate;
    /**
     * The Locale
     * @var \StructType\OriginType
     */
    public $Locale;
    /**
     * The MiscInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AddonMiscInfoType
     */
    public $MiscInfos;
    /**
     * The UID
     * @var string
     */
    public $UID;
    /**
     * Constructor method for AddonInsertType
     * @uses AddonInsertType::setAddonType()
     * @uses AddonInsertType::setShoppingCartId()
     * @uses AddonInsertType::setCreationDate()
     * @uses AddonInsertType::setLocale()
     * @uses AddonInsertType::setMiscInfos()
     * @uses AddonInsertType::setUID()
     * @param string $addonType
     * @param string $shoppingCartId
     * @param string $creationDate
     * @param \StructType\OriginType $locale
     * @param \StructType\AddonMiscInfoType $miscInfos
     * @param string $uID
     */
    public function __construct($addonType = null, $shoppingCartId = null, $creationDate = null, \StructType\OriginType $locale = null, \StructType\AddonMiscInfoType $miscInfos = null, $uID = null)
    {
        $this
            ->setAddonType($addonType)
            ->setShoppingCartId($shoppingCartId)
            ->setCreationDate($creationDate)
            ->setLocale($locale)
            ->setMiscInfos($miscInfos)
            ->setUID($uID);
    }
    /**
     * Get AddonType value
     * @return string|null
     */
    public function getAddonType()
    {
        return $this->AddonType;
    }
    /**
     * Set AddonType value
     * @uses \EnumType\AddonCategoryType::valueIsValid()
     * @uses \EnumType\AddonCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addonType
     * @return \StructType\AddonInsertType
     */
    public function setAddonType($addonType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddonCategoryType::valueIsValid($addonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addonType, implode(', ', \EnumType\AddonCategoryType::getValidValues())), __LINE__);
        }
        $this->AddonType = $addonType;
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
     * @return \StructType\AddonInsertType
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
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \StructType\AddonInsertType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get Locale value
     * @return \StructType\OriginType|null
     */
    public function getLocale()
    {
        return $this->Locale;
    }
    /**
     * Set Locale value
     * @param \StructType\OriginType $locale
     * @return \StructType\AddonInsertType
     */
    public function setLocale(\StructType\OriginType $locale = null)
    {
        $this->Locale = $locale;
        return $this;
    }
    /**
     * Get MiscInfos value
     * @return \StructType\AddonMiscInfoType|null
     */
    public function getMiscInfos()
    {
        return $this->MiscInfos;
    }
    /**
     * Set MiscInfos value
     * @param \StructType\AddonMiscInfoType $miscInfos
     * @return \StructType\AddonInsertType
     */
    public function setMiscInfos(\StructType\AddonMiscInfoType $miscInfos = null)
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
     * @return \StructType\AddonInsertType
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
     * @return \StructType\AddonInsertType
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
