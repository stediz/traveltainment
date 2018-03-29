<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DurationListType StructType
 * @subpackage Structs
 */
class DurationListType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $Duration;
    /**
     * Constructor method for DurationListType
     * @uses DurationListType::setDuration()
     * @param int[] $duration
     */
    public function __construct(array $duration = array())
    {
        $this
            ->setDuration($duration);
    }
    /**
     * Get Duration value
     * @return int[]|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @throws \InvalidArgumentException
     * @param int[] $duration
     * @return \StructType\DurationListType
     */
    public function setDuration(array $duration = array())
    {
        foreach ($duration as $durationListTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_numeric($durationListTypeDurationItem)) {
                throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of int, "%s" given', is_object($durationListTypeDurationItem) ? get_class($durationListTypeDurationItem) : gettype($durationListTypeDurationItem)), __LINE__);
            }
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Add item to Duration value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\DurationListType
     */
    public function addToDuration($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Duration[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DurationListType
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
