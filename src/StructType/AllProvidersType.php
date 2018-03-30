<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllProvidersType StructType
 * @subpackage Structs
 */
class AllProvidersType extends AbstractStructBase
{
    /**
     * The RentalCar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ProvidersType
     */
    public $RentalCar;
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ProvidersType
     */
    public $Insurance;
    /**
     * The Transfer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ProvidersType
     */
    public $Transfer;
    /**
     * The Parking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ProvidersType
     */
    public $Parking;
    /**
     * Constructor method for AllProvidersType
     * @uses AllProvidersType::setRentalCar()
     * @uses AllProvidersType::setInsurance()
     * @uses AllProvidersType::setTransfer()
     * @uses AllProvidersType::setParking()
     * @param \traveltainment\SOAP17\StructType\ProvidersType $rentalCar
     * @param \traveltainment\SOAP17\StructType\ProvidersType $insurance
     * @param \traveltainment\SOAP17\StructType\ProvidersType $transfer
     * @param \traveltainment\SOAP17\StructType\ProvidersType $parking
     */
    public function __construct(\traveltainment\SOAP17\StructType\ProvidersType $rentalCar = null, \traveltainment\SOAP17\StructType\ProvidersType $insurance = null, \traveltainment\SOAP17\StructType\ProvidersType $transfer = null, \traveltainment\SOAP17\StructType\ProvidersType $parking = null)
    {
        $this
            ->setRentalCar($rentalCar)
            ->setInsurance($insurance)
            ->setTransfer($transfer)
            ->setParking($parking);
    }
    /**
     * Get RentalCar value
     * @return \traveltainment\SOAP17\StructType\ProvidersType|null
     */
    public function getRentalCar()
    {
        return $this->RentalCar;
    }
    /**
     * Set RentalCar value
     * @param \traveltainment\SOAP17\StructType\ProvidersType $rentalCar
     * @return \traveltainment\SOAP17\StructType\AllProvidersType
     */
    public function setRentalCar(\traveltainment\SOAP17\StructType\ProvidersType $rentalCar = null)
    {
        $this->RentalCar = $rentalCar;
        return $this;
    }
    /**
     * Get Insurance value
     * @return \traveltainment\SOAP17\StructType\ProvidersType|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \traveltainment\SOAP17\StructType\ProvidersType $insurance
     * @return \traveltainment\SOAP17\StructType\AllProvidersType
     */
    public function setInsurance(\traveltainment\SOAP17\StructType\ProvidersType $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get Transfer value
     * @return \traveltainment\SOAP17\StructType\ProvidersType|null
     */
    public function getTransfer()
    {
        return $this->Transfer;
    }
    /**
     * Set Transfer value
     * @param \traveltainment\SOAP17\StructType\ProvidersType $transfer
     * @return \traveltainment\SOAP17\StructType\AllProvidersType
     */
    public function setTransfer(\traveltainment\SOAP17\StructType\ProvidersType $transfer = null)
    {
        $this->Transfer = $transfer;
        return $this;
    }
    /**
     * Get Parking value
     * @return \traveltainment\SOAP17\StructType\ProvidersType|null
     */
    public function getParking()
    {
        return $this->Parking;
    }
    /**
     * Set Parking value
     * @param \traveltainment\SOAP17\StructType\ProvidersType $parking
     * @return \traveltainment\SOAP17\StructType\AllProvidersType
     */
    public function setParking(\traveltainment\SOAP17\StructType\ProvidersType $parking = null)
    {
        $this->Parking = $parking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AllProvidersType
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
