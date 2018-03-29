<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerCountsType StructType
 * @subpackage Structs
 */
class PassengerCountsType extends AbstractStructBase
{
    /**
     * The AdultCount
     * @var int
     */
    public $AdultCount;
    /**
     * The ChildCount
     * @var int
     */
    public $ChildCount;
    /**
     * Constructor method for PassengerCountsType
     * @uses PassengerCountsType::setAdultCount()
     * @uses PassengerCountsType::setChildCount()
     * @param int $adultCount
     * @param int $childCount
     */
    public function __construct($adultCount = null, $childCount = null)
    {
        $this
            ->setAdultCount($adultCount)
            ->setChildCount($childCount);
    }
    /**
     * Get AdultCount value
     * @return int|null
     */
    public function getAdultCount()
    {
        return $this->AdultCount;
    }
    /**
     * Set AdultCount value
     * @param int $adultCount
     * @return \StructType\PassengerCountsType
     */
    public function setAdultCount($adultCount = null)
    {
        // validation for constraint: int
        if (!is_null($adultCount) && !is_numeric($adultCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($adultCount)), __LINE__);
        }
        $this->AdultCount = $adultCount;
        return $this;
    }
    /**
     * Get ChildCount value
     * @return int|null
     */
    public function getChildCount()
    {
        return $this->ChildCount;
    }
    /**
     * Set ChildCount value
     * @param int $childCount
     * @return \StructType\PassengerCountsType
     */
    public function setChildCount($childCount = null)
    {
        // validation for constraint: int
        if (!is_null($childCount) && !is_numeric($childCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($childCount)), __LINE__);
        }
        $this->ChildCount = $childCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PassengerCountsType
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
