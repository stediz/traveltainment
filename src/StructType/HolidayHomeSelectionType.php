<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeSelectionType StructType
 * @subpackage Structs
 */
class HolidayHomeSelectionType extends AbstractStructBase
{
    /**
     * The RegionIDs
     * Meta informations extracted from the WSDL
     * - maxLength: 100
     * - minLength: 1
     * @var int
     */
    public $RegionIDs;
    /**
     * Constructor method for HolidayHomeSelectionType
     * @uses HolidayHomeSelectionType::setRegionIDs()
     * @param int $regionIDs
     */
    public function __construct($regionIDs = null)
    {
        $this
            ->setRegionIDs($regionIDs);
    }
    /**
     * Get RegionIDs value
     * @return int|null
     */
    public function getRegionIDs()
    {
        return $this->RegionIDs;
    }
    /**
     * Set RegionIDs value
     * @param int $regionIDs
     * @return \StructType\HolidayHomeSelectionType
     */
    public function setRegionIDs($regionIDs = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($regionIDs) && strlen($regionIDs) > 100) || (is_array($regionIDs) && count($regionIDs) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($regionIDs) ? strlen($regionIDs) : count($regionIDs)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($regionIDs) && strlen($regionIDs) < 1) || (is_array($regionIDs) && count($regionIDs) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: int
        if (!is_null($regionIDs) && !is_numeric($regionIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($regionIDs)), __LINE__);
        }
        $this->RegionIDs = $regionIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeSelectionType
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
