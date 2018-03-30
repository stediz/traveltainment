<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferScType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ein Offer enthaelt einen Package-, Accomodation- oder Flightknoten, oder einen "Third-party-Knoten" (RentalCar, Insurance oder Transfer)
 * @subpackage Structs
 */
class OfferScType extends OfferBaseType
{
    /**
     * The Package
     * @var \traveltainment\SOAP17\StructType\PackageType
     */
    public $Package;
    /**
     * The Accommodation
     * @var \traveltainment\SOAP17\StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Flight
     * @var \traveltainment\SOAP17\StructType\FlightType
     */
    public $Flight;
    /**
     * The RentalCar
     * @var \traveltainment\SOAP17\StructType\RentalCarDetails4ScType
     */
    public $RentalCar;
    /**
     * The Insurance
     * @var \traveltainment\SOAP17\StructType\InsuranceDetails4ScType
     */
    public $Insurance;
    /**
     * The Transfer
     * @var \traveltainment\SOAP17\StructType\TransferDetails4ScType
     */
    public $Transfer;
    /**
     * The Parking
     * @var \traveltainment\SOAP17\StructType\ParkingDetails4ScType
     */
    public $Parking;
    /**
     * The AdditionalCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AdditionalCostType
     */
    public $AdditionalCost;
    /**
     * Constructor method for OfferScType
     * @uses OfferScType::setPackage()
     * @uses OfferScType::setAccommodation()
     * @uses OfferScType::setFlight()
     * @uses OfferScType::setRentalCar()
     * @uses OfferScType::setInsurance()
     * @uses OfferScType::setTransfer()
     * @uses OfferScType::setParking()
     * @uses OfferScType::setAdditionalCost()
     * @param \traveltainment\SOAP17\StructType\PackageType $package
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     * @param \traveltainment\SOAP17\StructType\RentalCarDetails4ScType $rentalCar
     * @param \traveltainment\SOAP17\StructType\InsuranceDetails4ScType $insurance
     * @param \traveltainment\SOAP17\StructType\TransferDetails4ScType $transfer
     * @param \traveltainment\SOAP17\StructType\ParkingDetails4ScType $parking
     * @param \traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost
     */
    public function __construct(\traveltainment\SOAP17\StructType\PackageType $package = null, \traveltainment\SOAP17\StructType\AccommodationType $accommodation = null, \traveltainment\SOAP17\StructType\FlightType $flight = null, \traveltainment\SOAP17\StructType\RentalCarDetails4ScType $rentalCar = null, \traveltainment\SOAP17\StructType\InsuranceDetails4ScType $insurance = null, \traveltainment\SOAP17\StructType\TransferDetails4ScType $transfer = null, \traveltainment\SOAP17\StructType\ParkingDetails4ScType $parking = null, \traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost = null)
    {
        $this
            ->setPackage($package)
            ->setAccommodation($accommodation)
            ->setFlight($flight)
            ->setRentalCar($rentalCar)
            ->setInsurance($insurance)
            ->setTransfer($transfer)
            ->setParking($parking)
            ->setAdditionalCost($additionalCost);
    }
    /**
     * Get Package value
     * @return \traveltainment\SOAP17\StructType\PackageType|null
     */
    public function getPackage()
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \traveltainment\SOAP17\StructType\PackageType $package
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setPackage(\traveltainment\SOAP17\StructType\PackageType $package = null)
    {
        $this->Package = $package;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \traveltainment\SOAP17\StructType\AccommodationType|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \traveltainment\SOAP17\StructType\AccommodationType $accommodation
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setAccommodation(\traveltainment\SOAP17\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return \traveltainment\SOAP17\StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \traveltainment\SOAP17\StructType\FlightType $flight
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setFlight(\traveltainment\SOAP17\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Get RentalCar value
     * @return \traveltainment\SOAP17\StructType\RentalCarDetails4ScType|null
     */
    public function getRentalCar()
    {
        return $this->RentalCar;
    }
    /**
     * Set RentalCar value
     * @param \traveltainment\SOAP17\StructType\RentalCarDetails4ScType $rentalCar
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setRentalCar(\traveltainment\SOAP17\StructType\RentalCarDetails4ScType $rentalCar = null)
    {
        $this->RentalCar = $rentalCar;
        return $this;
    }
    /**
     * Get Insurance value
     * @return \traveltainment\SOAP17\StructType\InsuranceDetails4ScType|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \traveltainment\SOAP17\StructType\InsuranceDetails4ScType $insurance
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setInsurance(\traveltainment\SOAP17\StructType\InsuranceDetails4ScType $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get Transfer value
     * @return \traveltainment\SOAP17\StructType\TransferDetails4ScType|null
     */
    public function getTransfer()
    {
        return $this->Transfer;
    }
    /**
     * Set Transfer value
     * @param \traveltainment\SOAP17\StructType\TransferDetails4ScType $transfer
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setTransfer(\traveltainment\SOAP17\StructType\TransferDetails4ScType $transfer = null)
    {
        $this->Transfer = $transfer;
        return $this;
    }
    /**
     * Get Parking value
     * @return \traveltainment\SOAP17\StructType\ParkingDetails4ScType|null
     */
    public function getParking()
    {
        return $this->Parking;
    }
    /**
     * Set Parking value
     * @param \traveltainment\SOAP17\StructType\ParkingDetails4ScType $parking
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setParking(\traveltainment\SOAP17\StructType\ParkingDetails4ScType $parking = null)
    {
        $this->Parking = $parking;
        return $this;
    }
    /**
     * Get AdditionalCost value
     * @return \traveltainment\SOAP17\StructType\AdditionalCostType|null
     */
    public function getAdditionalCost()
    {
        return $this->AdditionalCost;
    }
    /**
     * Set AdditionalCost value
     * @param \traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost
     * @return \traveltainment\SOAP17\StructType\OfferScType
     */
    public function setAdditionalCost(\traveltainment\SOAP17\StructType\AdditionalCostType $additionalCost = null)
    {
        $this->AdditionalCost = $additionalCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\OfferScType
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
