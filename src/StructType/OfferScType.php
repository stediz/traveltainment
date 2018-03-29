<?php

namespace StructType;

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
     * @var \StructType\PackageType
     */
    public $Package;
    /**
     * The Accommodation
     * @var \StructType\AccommodationType
     */
    public $Accommodation;
    /**
     * The Flight
     * @var \StructType\FlightType
     */
    public $Flight;
    /**
     * The RentalCar
     * @var \StructType\RentalCarDetails4ScType
     */
    public $RentalCar;
    /**
     * The Insurance
     * @var \StructType\InsuranceDetails4ScType
     */
    public $Insurance;
    /**
     * The Transfer
     * @var \StructType\TransferDetails4ScType
     */
    public $Transfer;
    /**
     * The Parking
     * @var \StructType\ParkingDetails4ScType
     */
    public $Parking;
    /**
     * The AdditionalCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AdditionalCostType
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
     * @param \StructType\PackageType $package
     * @param \StructType\AccommodationType $accommodation
     * @param \StructType\FlightType $flight
     * @param \StructType\RentalCarDetails4ScType $rentalCar
     * @param \StructType\InsuranceDetails4ScType $insurance
     * @param \StructType\TransferDetails4ScType $transfer
     * @param \StructType\ParkingDetails4ScType $parking
     * @param \StructType\AdditionalCostType $additionalCost
     */
    public function __construct(\StructType\PackageType $package = null, \StructType\AccommodationType $accommodation = null, \StructType\FlightType $flight = null, \StructType\RentalCarDetails4ScType $rentalCar = null, \StructType\InsuranceDetails4ScType $insurance = null, \StructType\TransferDetails4ScType $transfer = null, \StructType\ParkingDetails4ScType $parking = null, \StructType\AdditionalCostType $additionalCost = null)
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
     * @return \StructType\PackageType|null
     */
    public function getPackage()
    {
        return $this->Package;
    }
    /**
     * Set Package value
     * @param \StructType\PackageType $package
     * @return \StructType\OfferScType
     */
    public function setPackage(\StructType\PackageType $package = null)
    {
        $this->Package = $package;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return \StructType\AccommodationType|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param \StructType\AccommodationType $accommodation
     * @return \StructType\OfferScType
     */
    public function setAccommodation(\StructType\AccommodationType $accommodation = null)
    {
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Flight value
     * @return \StructType\FlightType|null
     */
    public function getFlight()
    {
        return $this->Flight;
    }
    /**
     * Set Flight value
     * @param \StructType\FlightType $flight
     * @return \StructType\OfferScType
     */
    public function setFlight(\StructType\FlightType $flight = null)
    {
        $this->Flight = $flight;
        return $this;
    }
    /**
     * Get RentalCar value
     * @return \StructType\RentalCarDetails4ScType|null
     */
    public function getRentalCar()
    {
        return $this->RentalCar;
    }
    /**
     * Set RentalCar value
     * @param \StructType\RentalCarDetails4ScType $rentalCar
     * @return \StructType\OfferScType
     */
    public function setRentalCar(\StructType\RentalCarDetails4ScType $rentalCar = null)
    {
        $this->RentalCar = $rentalCar;
        return $this;
    }
    /**
     * Get Insurance value
     * @return \StructType\InsuranceDetails4ScType|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \StructType\InsuranceDetails4ScType $insurance
     * @return \StructType\OfferScType
     */
    public function setInsurance(\StructType\InsuranceDetails4ScType $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get Transfer value
     * @return \StructType\TransferDetails4ScType|null
     */
    public function getTransfer()
    {
        return $this->Transfer;
    }
    /**
     * Set Transfer value
     * @param \StructType\TransferDetails4ScType $transfer
     * @return \StructType\OfferScType
     */
    public function setTransfer(\StructType\TransferDetails4ScType $transfer = null)
    {
        $this->Transfer = $transfer;
        return $this;
    }
    /**
     * Get Parking value
     * @return \StructType\ParkingDetails4ScType|null
     */
    public function getParking()
    {
        return $this->Parking;
    }
    /**
     * Set Parking value
     * @param \StructType\ParkingDetails4ScType $parking
     * @return \StructType\OfferScType
     */
    public function setParking(\StructType\ParkingDetails4ScType $parking = null)
    {
        $this->Parking = $parking;
        return $this;
    }
    /**
     * Get AdditionalCost value
     * @return \StructType\AdditionalCostType|null
     */
    public function getAdditionalCost()
    {
        return $this->AdditionalCost;
    }
    /**
     * Set AdditionalCost value
     * @param \StructType\AdditionalCostType $additionalCost
     * @return \StructType\OfferScType
     */
    public function setAdditionalCost(\StructType\AdditionalCostType $additionalCost = null)
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
     * @return \StructType\OfferScType
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
