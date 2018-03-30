<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowanceType StructType
 * @subpackage Structs
 */
class BaggageAllowanceType extends AbstractStructBase
{
    /**
     * The MaxBags
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxBags;
    /**
     * The MaxWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxWeight;
    /**
     * Constructor method for BaggageAllowanceType
     * @uses BaggageAllowanceType::setMaxBags()
     * @uses BaggageAllowanceType::setMaxWeight()
     * @param int $maxBags
     * @param int $maxWeight
     */
    public function __construct($maxBags = null, $maxWeight = null)
    {
        $this
            ->setMaxBags($maxBags)
            ->setMaxWeight($maxWeight);
    }
    /**
     * Get MaxBags value
     * @return int|null
     */
    public function getMaxBags()
    {
        return $this->MaxBags;
    }
    /**
     * Set MaxBags value
     * @param int $maxBags
     * @return \traveltainment\SOAP17\StructType\BaggageAllowanceType
     */
    public function setMaxBags($maxBags = null)
    {
        // validation for constraint: int
        if (!is_null($maxBags) && !is_numeric($maxBags)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxBags)), __LINE__);
        }
        $this->MaxBags = $maxBags;
        return $this;
    }
    /**
     * Get MaxWeight value
     * @return int|null
     */
    public function getMaxWeight()
    {
        return $this->MaxWeight;
    }
    /**
     * Set MaxWeight value
     * @param int $maxWeight
     * @return \traveltainment\SOAP17\StructType\BaggageAllowanceType
     */
    public function setMaxWeight($maxWeight = null)
    {
        // validation for constraint: int
        if (!is_null($maxWeight) && !is_numeric($maxWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxWeight)), __LINE__);
        }
        $this->MaxWeight = $maxWeight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BaggageAllowanceType
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
