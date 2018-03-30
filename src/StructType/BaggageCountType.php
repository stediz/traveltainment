<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageCountType StructType
 * @subpackage Structs
 */
class BaggageCountType extends AbstractStructBase
{
    /**
     * The BigBaggageCount
     * @var int
     */
    public $BigBaggageCount;
    /**
     * The SmallBaggageCount
     * @var int
     */
    public $SmallBaggageCount;
    /**
     * Constructor method for BaggageCountType
     * @uses BaggageCountType::setBigBaggageCount()
     * @uses BaggageCountType::setSmallBaggageCount()
     * @param int $bigBaggageCount
     * @param int $smallBaggageCount
     */
    public function __construct($bigBaggageCount = null, $smallBaggageCount = null)
    {
        $this
            ->setBigBaggageCount($bigBaggageCount)
            ->setSmallBaggageCount($smallBaggageCount);
    }
    /**
     * Get BigBaggageCount value
     * @return int|null
     */
    public function getBigBaggageCount()
    {
        return $this->BigBaggageCount;
    }
    /**
     * Set BigBaggageCount value
     * @param int $bigBaggageCount
     * @return \traveltainment\SOAP17\StructType\BaggageCountType
     */
    public function setBigBaggageCount($bigBaggageCount = null)
    {
        // validation for constraint: int
        if (!is_null($bigBaggageCount) && !is_numeric($bigBaggageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bigBaggageCount)), __LINE__);
        }
        $this->BigBaggageCount = $bigBaggageCount;
        return $this;
    }
    /**
     * Get SmallBaggageCount value
     * @return int|null
     */
    public function getSmallBaggageCount()
    {
        return $this->SmallBaggageCount;
    }
    /**
     * Set SmallBaggageCount value
     * @param int $smallBaggageCount
     * @return \traveltainment\SOAP17\StructType\BaggageCountType
     */
    public function setSmallBaggageCount($smallBaggageCount = null)
    {
        // validation for constraint: int
        if (!is_null($smallBaggageCount) && !is_numeric($smallBaggageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smallBaggageCount)), __LINE__);
        }
        $this->SmallBaggageCount = $smallBaggageCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BaggageCountType
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
