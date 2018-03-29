<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonMiscInfoType StructType
 * @subpackage Structs
 */
class AddonMiscInfoType extends AbstractStructBase
{
    /**
     * The IsChargeable
     * @var bool
     */
    public $IsChargeable;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 64
     * @var string
     */
    public $Label;
    /**
     * Constructor method for AddonMiscInfoType
     * @uses AddonMiscInfoType::setIsChargeable()
     * @uses AddonMiscInfoType::setLabel()
     * @param bool $isChargeable
     * @param string $label
     */
    public function __construct($isChargeable = null, $label = null)
    {
        $this
            ->setIsChargeable($isChargeable)
            ->setLabel($label);
    }
    /**
     * Get IsChargeable value
     * @return bool|null
     */
    public function getIsChargeable()
    {
        return $this->IsChargeable;
    }
    /**
     * Set IsChargeable value
     * @param bool $isChargeable
     * @return \StructType\AddonMiscInfoType
     */
    public function setIsChargeable($isChargeable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isChargeable) && !is_bool($isChargeable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isChargeable)), __LINE__);
        }
        $this->IsChargeable = $isChargeable;
        return $this;
    }
    /**
     * Get Label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \StructType\AddonMiscInfoType
     */
    public function setLabel($label = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($label) && strlen($label) > 64) || (is_array($label) && count($label) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($label) ? strlen($label) : count($label)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($label)), __LINE__);
        }
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddonMiscInfoType
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
