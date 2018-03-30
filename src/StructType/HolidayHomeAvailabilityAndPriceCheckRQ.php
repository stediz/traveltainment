<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeAvailabilityAndPriceCheckRQ StructType
 * @subpackage Structs
 */
class HolidayHomeAvailabilityAndPriceCheckRQ extends XmlInterfaceRQ
{
    /**
     * The OfferID
     * Meta informations extracted from the WSDL
     * - documentation: Die OfferID ist eine temporaere und eindeutige ID, die Aufschluss ueber das derzeit angefragte Angebot des Users gibt. Die OfferID kann man den Search-Responses entnehmen.
     * @var string
     */
    public $OfferID;
    /**
     * The BookingID
     * Meta informations extracted from the WSDL
     * - documentation: Die BookingID ist die ID eines Buchungsauftrags und wird von der BookingEngine generiert und ausgegeben. Der AvailabiltyAndPriceCheckRQ benoetigt diese ID, wenn man auf einer bestehenden Buchung eine BA ausfuehren moechte.
     * @var string
     */
    public $BookingID;
    /**
     * The TravellerCount
     * Meta informations extracted from the WSDL
     * - maxInclusive: 8
     * - minInclusive: 1
     * @var int
     */
    public $TravellerCount;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType
     */
    public $Options;
    /**
     * Constructor method for HolidayHomeAvailabilityAndPriceCheckRQ
     * @uses HolidayHomeAvailabilityAndPriceCheckRQ::setOfferID()
     * @uses HolidayHomeAvailabilityAndPriceCheckRQ::setBookingID()
     * @uses HolidayHomeAvailabilityAndPriceCheckRQ::setTravellerCount()
     * @uses HolidayHomeAvailabilityAndPriceCheckRQ::setOptions()
     * @param string $offerID
     * @param string $bookingID
     * @param int $travellerCount
     * @param \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options
     */
    public function __construct($offerID = null, $bookingID = null, $travellerCount = null, \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options = null)
    {
        $this
            ->setOfferID($offerID)
            ->setBookingID($bookingID)
            ->setTravellerCount($travellerCount)
            ->setOptions($options);
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRQ
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get BookingID value
     * @return string|null
     */
    public function getBookingID()
    {
        return $this->BookingID;
    }
    /**
     * Set BookingID value
     * @param string $bookingID
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRQ
     */
    public function setBookingID($bookingID = null)
    {
        // validation for constraint: string
        if (!is_null($bookingID) && !is_string($bookingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingID)), __LINE__);
        }
        $this->BookingID = $bookingID;
        return $this;
    }
    /**
     * Get TravellerCount value
     * @return int|null
     */
    public function getTravellerCount()
    {
        return $this->TravellerCount;
    }
    /**
     * Set TravellerCount value
     * @param int $travellerCount
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRQ
     */
    public function setTravellerCount($travellerCount = null)
    {
        // validation for constraint: maxInclusive
        if ($travellerCount > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 8, "%s" given', $travellerCount), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($travellerCount < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $travellerCount), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($travellerCount) && !is_numeric($travellerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($travellerCount)), __LINE__);
        }
        $this->TravellerCount = $travellerCount;
        return $this;
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRQ
     */
    public function setOptions(\traveltainment\SOAP17\StructType\AvailabilityAndPriceCheckOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeAvailabilityAndPriceCheckRQ
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
