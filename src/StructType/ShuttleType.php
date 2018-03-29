<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShuttleType StructType
 * @subpackage Structs
 */
class ShuttleType extends AbstractStructBase
{
    /**
     * The ShuttleFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShuttleFrom;
    /**
     * The ShuttleTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShuttleTo;
    /**
     * The ShuttleOpeningHours
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShuttleOpeningHours;
    /**
     * The ShuttleFrequency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShuttleFrequency;
    /**
     * Constructor method for ShuttleType
     * @uses ShuttleType::setShuttleFrom()
     * @uses ShuttleType::setShuttleTo()
     * @uses ShuttleType::setShuttleOpeningHours()
     * @uses ShuttleType::setShuttleFrequency()
     * @param string $shuttleFrom
     * @param string $shuttleTo
     * @param string $shuttleOpeningHours
     * @param string $shuttleFrequency
     */
    public function __construct($shuttleFrom = null, $shuttleTo = null, $shuttleOpeningHours = null, $shuttleFrequency = null)
    {
        $this
            ->setShuttleFrom($shuttleFrom)
            ->setShuttleTo($shuttleTo)
            ->setShuttleOpeningHours($shuttleOpeningHours)
            ->setShuttleFrequency($shuttleFrequency);
    }
    /**
     * Get ShuttleFrom value
     * @return string|null
     */
    public function getShuttleFrom()
    {
        return $this->ShuttleFrom;
    }
    /**
     * Set ShuttleFrom value
     * @param string $shuttleFrom
     * @return \StructType\ShuttleType
     */
    public function setShuttleFrom($shuttleFrom = null)
    {
        // validation for constraint: string
        if (!is_null($shuttleFrom) && !is_string($shuttleFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shuttleFrom)), __LINE__);
        }
        $this->ShuttleFrom = $shuttleFrom;
        return $this;
    }
    /**
     * Get ShuttleTo value
     * @return string|null
     */
    public function getShuttleTo()
    {
        return $this->ShuttleTo;
    }
    /**
     * Set ShuttleTo value
     * @param string $shuttleTo
     * @return \StructType\ShuttleType
     */
    public function setShuttleTo($shuttleTo = null)
    {
        // validation for constraint: string
        if (!is_null($shuttleTo) && !is_string($shuttleTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shuttleTo)), __LINE__);
        }
        $this->ShuttleTo = $shuttleTo;
        return $this;
    }
    /**
     * Get ShuttleOpeningHours value
     * @return string|null
     */
    public function getShuttleOpeningHours()
    {
        return $this->ShuttleOpeningHours;
    }
    /**
     * Set ShuttleOpeningHours value
     * @param string $shuttleOpeningHours
     * @return \StructType\ShuttleType
     */
    public function setShuttleOpeningHours($shuttleOpeningHours = null)
    {
        // validation for constraint: string
        if (!is_null($shuttleOpeningHours) && !is_string($shuttleOpeningHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shuttleOpeningHours)), __LINE__);
        }
        $this->ShuttleOpeningHours = $shuttleOpeningHours;
        return $this;
    }
    /**
     * Get ShuttleFrequency value
     * @return string|null
     */
    public function getShuttleFrequency()
    {
        return $this->ShuttleFrequency;
    }
    /**
     * Set ShuttleFrequency value
     * @param string $shuttleFrequency
     * @return \StructType\ShuttleType
     */
    public function setShuttleFrequency($shuttleFrequency = null)
    {
        // validation for constraint: string
        if (!is_null($shuttleFrequency) && !is_string($shuttleFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shuttleFrequency)), __LINE__);
        }
        $this->ShuttleFrequency = $shuttleFrequency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShuttleType
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
