<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShuttleServiceType StructType
 * @subpackage Structs
 */
class ShuttleServiceType extends AbstractStructBase
{
    /**
     * The ShuttleOpeningHours
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OpeningHourDetailsType
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
     * Constructor method for ShuttleServiceType
     * @uses ShuttleServiceType::setShuttleOpeningHours()
     * @uses ShuttleServiceType::setShuttleFrequency()
     * @param \StructType\OpeningHourDetailsType $shuttleOpeningHours
     * @param string $shuttleFrequency
     */
    public function __construct(\StructType\OpeningHourDetailsType $shuttleOpeningHours = null, $shuttleFrequency = null)
    {
        $this
            ->setShuttleOpeningHours($shuttleOpeningHours)
            ->setShuttleFrequency($shuttleFrequency);
    }
    /**
     * Get ShuttleOpeningHours value
     * @return \StructType\OpeningHourDetailsType|null
     */
    public function getShuttleOpeningHours()
    {
        return $this->ShuttleOpeningHours;
    }
    /**
     * Set ShuttleOpeningHours value
     * @param \StructType\OpeningHourDetailsType $shuttleOpeningHours
     * @return \StructType\ShuttleServiceType
     */
    public function setShuttleOpeningHours(\StructType\OpeningHourDetailsType $shuttleOpeningHours = null)
    {
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
     * @return \StructType\ShuttleServiceType
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
     * @return \StructType\ShuttleServiceType
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
