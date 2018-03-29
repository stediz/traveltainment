<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartDatesType StructType
 * @subpackage Structs
 */
class StartDatesType extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $StartDate;
    /**
     * Constructor method for StartDatesType
     * @uses StartDatesType::setStartDate()
     * @param string[] $startDate
     */
    public function __construct(array $startDate = array())
    {
        $this
            ->setStartDate($startDate);
    }
    /**
     * Get StartDate value
     * @return string[]|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @throws \InvalidArgumentException
     * @param string[] $startDate
     * @return \StructType\StartDatesType
     */
    public function setStartDate(array $startDate = array())
    {
        foreach ($startDate as $startDatesTypeStartDateItem) {
            // validation for constraint: itemType
            if (!is_string($startDatesTypeStartDateItem)) {
                throw new \InvalidArgumentException(sprintf('The StartDate property can only contain items of string, "%s" given', is_object($startDatesTypeStartDateItem) ? get_class($startDatesTypeStartDateItem) : gettype($startDatesTypeStartDateItem)), __LINE__);
            }
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Add item to StartDate value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\StartDatesType
     */
    public function addToStartDate($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The StartDate property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StartDate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StartDatesType
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
