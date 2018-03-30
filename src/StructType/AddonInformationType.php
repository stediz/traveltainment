<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonInformationType StructType
 * @subpackage Structs
 */
class AddonInformationType extends AbstractStructBase
{
    /**
     * The AddonId
     * Meta informations extracted from the WSDL
     * - maxLength: 64
     * @var string
     */
    public $AddonId;
    /**
     * The AddonType
     * @var string
     */
    public $AddonType;
    /**
     * Constructor method for AddonInformationType
     * @uses AddonInformationType::setAddonId()
     * @uses AddonInformationType::setAddonType()
     * @param string $addonId
     * @param string $addonType
     */
    public function __construct($addonId = null, $addonType = null)
    {
        $this
            ->setAddonId($addonId)
            ->setAddonType($addonType);
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
     * @return \traveltainment\SOAP17\StructType\AddonInformationType
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
     * Get AddonType value
     * @return string|null
     */
    public function getAddonType()
    {
        return $this->AddonType;
    }
    /**
     * Set AddonType value
     * @uses \traveltainment\SOAP17\EnumType\AddonDefinitionType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\AddonDefinitionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addonType
     * @return \traveltainment\SOAP17\StructType\AddonInformationType
     */
    public function setAddonType($addonType = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\AddonDefinitionType::valueIsValid($addonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addonType, implode(', ', \traveltainment\SOAP17\EnumType\AddonDefinitionType::getValidValues())), __LINE__);
        }
        $this->AddonType = $addonType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonInformationType
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
