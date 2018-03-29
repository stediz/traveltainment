<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationSystemInformationType StructType
 * @subpackage Structs
 */
class ReservationSystemInformationType extends AbstractStructBase
{
    /**
     * The ReservationSystemID
     * @var int
     */
    public $ReservationSystemID;
    /**
     * Constructor method for ReservationSystemInformationType
     * @uses ReservationSystemInformationType::setReservationSystemID()
     * @param int $reservationSystemID
     */
    public function __construct($reservationSystemID = null)
    {
        $this
            ->setReservationSystemID($reservationSystemID);
    }
    /**
     * Get ReservationSystemID value
     * @return int|null
     */
    public function getReservationSystemID()
    {
        return $this->ReservationSystemID;
    }
    /**
     * Set ReservationSystemID value
     * @param int $reservationSystemID
     * @return \StructType\ReservationSystemInformationType
     */
    public function setReservationSystemID($reservationSystemID = null)
    {
        // validation for constraint: int
        if (!is_null($reservationSystemID) && !is_numeric($reservationSystemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reservationSystemID)), __LINE__);
        }
        $this->ReservationSystemID = $reservationSystemID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ReservationSystemInformationType
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
