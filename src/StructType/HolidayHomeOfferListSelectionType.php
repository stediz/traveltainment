<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferListSelectionType StructType
 * @subpackage Structs
 */
class HolidayHomeOfferListSelectionType extends AbstractStructBase
{
    /**
     * The ObjectID
     * @var int
     */
    public $ObjectID;
    /**
     * Constructor method for HolidayHomeOfferListSelectionType
     * @uses HolidayHomeOfferListSelectionType::setObjectID()
     * @param int $objectID
     */
    public function __construct($objectID = null)
    {
        $this
            ->setObjectID($objectID);
    }
    /**
     * Get ObjectID value
     * @return int|null
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param int $objectID
     * @return \StructType\HolidayHomeOfferListSelectionType
     */
    public function setObjectID($objectID = null)
    {
        // validation for constraint: int
        if (!is_null($objectID) && !is_numeric($objectID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($objectID)), __LINE__);
        }
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeOfferListSelectionType
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
