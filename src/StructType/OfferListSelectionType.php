<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferListSelectionType StructType
 * @subpackage Structs
 */
class OfferListSelectionType extends AbstractStructBase
{
    /**
     * The HotelSelection
     * @var \traveltainment\SOAP17\StructType\HotelSelectionType
     */
    public $HotelSelection;
    /**
     * The FlightSelection
     * @var \traveltainment\SOAP17\StructType\FlightSelectionType
     */
    public $FlightSelection;
    /**
     * Constructor method for OfferListSelectionType
     * @uses OfferListSelectionType::setHotelSelection()
     * @uses OfferListSelectionType::setFlightSelection()
     * @param \traveltainment\SOAP17\StructType\HotelSelectionType $hotelSelection
     * @param \traveltainment\SOAP17\StructType\FlightSelectionType $flightSelection
     */
    public function __construct(\traveltainment\SOAP17\StructType\HotelSelectionType $hotelSelection = null, \traveltainment\SOAP17\StructType\FlightSelectionType $flightSelection = null)
    {
        $this
            ->setHotelSelection($hotelSelection)
            ->setFlightSelection($flightSelection);
    }
    /**
     * Get HotelSelection value
     * @return \traveltainment\SOAP17\StructType\HotelSelectionType|null
     */
    public function getHotelSelection()
    {
        return $this->HotelSelection;
    }
    /**
     * Set HotelSelection value
     * @param \traveltainment\SOAP17\StructType\HotelSelectionType $hotelSelection
     * @return \traveltainment\SOAP17\StructType\OfferListSelectionType
     */
    public function setHotelSelection(\traveltainment\SOAP17\StructType\HotelSelectionType $hotelSelection = null)
    {
        $this->HotelSelection = $hotelSelection;
        return $this;
    }
    /**
     * Get FlightSelection value
     * @return \traveltainment\SOAP17\StructType\FlightSelectionType|null
     */
    public function getFlightSelection()
    {
        return $this->FlightSelection;
    }
    /**
     * Set FlightSelection value
     * @param \traveltainment\SOAP17\StructType\FlightSelectionType $flightSelection
     * @return \traveltainment\SOAP17\StructType\OfferListSelectionType
     */
    public function setFlightSelection(\traveltainment\SOAP17\StructType\FlightSelectionType $flightSelection = null)
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
     * @return \traveltainment\SOAP17\StructType\OfferListSelectionType
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
