<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListSelectionType StructType
 * @subpackage Structs
 */
class OfferListSelectionType extends AbstractStructBase
{
    /**
     * The HotelSelection
     * @var \StructType\HotelSelectionType
     */
    public $HotelSelection;
    /**
     * The FlightSelection
     * @var \StructType\FlightSelectionType
     */
    public $FlightSelection;
    /**
     * Constructor method for OfferListSelectionType
     * @uses OfferListSelectionType::setHotelSelection()
     * @uses OfferListSelectionType::setFlightSelection()
     * @param \StructType\HotelSelectionType $hotelSelection
     * @param \StructType\FlightSelectionType $flightSelection
     */
    public function __construct(\StructType\HotelSelectionType $hotelSelection = null, \StructType\FlightSelectionType $flightSelection = null)
    {
        $this
            ->setHotelSelection($hotelSelection)
            ->setFlightSelection($flightSelection);
    }
    /**
     * Get HotelSelection value
     * @return \StructType\HotelSelectionType|null
     */
    public function getHotelSelection()
    {
        return $this->HotelSelection;
    }
    /**
     * Set HotelSelection value
     * @param \StructType\HotelSelectionType $hotelSelection
     * @return \StructType\OfferListSelectionType
     */
    public function setHotelSelection(\StructType\HotelSelectionType $hotelSelection = null)
    {
        $this->HotelSelection = $hotelSelection;
        return $this;
    }
    /**
     * Get FlightSelection value
     * @return \StructType\FlightSelectionType|null
     */
    public function getFlightSelection()
    {
        return $this->FlightSelection;
    }
    /**
     * Set FlightSelection value
     * @param \StructType\FlightSelectionType $flightSelection
     * @return \StructType\OfferListSelectionType
     */
    public function setFlightSelection(\StructType\FlightSelectionType $flightSelection = null)
    {
        $this->FlightSelection = $flightSelection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OfferListSelectionType
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
