<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParkingTeaserRSType StructType
 * @subpackage Structs
 */
class GetParkingTeaserRSType extends ResponseType
{
    /**
     * The Errors
     * @var \traveltainment\SOAP17\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Offer
     * @var \traveltainment\SOAP17\StructType\ParkingOfferType
     */
    public $Offer;
    /**
     * The ProviderDetails
     * @var \traveltainment\SOAP17\StructType\ProviderDetailsType
     */
    public $ProviderDetails;
    /**
     * The ParkingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ParkingDetailsType
     */
    public $ParkingDetails;
    /**
     * Constructor method for GetParkingTeaserRSType
     * @uses GetParkingTeaserRSType::setErrors()
     * @uses GetParkingTeaserRSType::setOffer()
     * @uses GetParkingTeaserRSType::setProviderDetails()
     * @uses GetParkingTeaserRSType::setParkingDetails()
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @param \traveltainment\SOAP17\StructType\ParkingOfferType $offer
     * @param \traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails
     * @param \traveltainment\SOAP17\StructType\ParkingDetailsType $parkingDetails
     */
    public function __construct(\traveltainment\SOAP17\StructType\ErrorsType $errors = null, \traveltainment\SOAP17\StructType\ParkingOfferType $offer = null, \traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails = null, \traveltainment\SOAP17\StructType\ParkingDetailsType $parkingDetails = null)
    {
        $this
            ->setErrors($errors)
            ->setOffer($offer)
            ->setProviderDetails($providerDetails)
            ->setParkingDetails($parkingDetails);
    }
    /**
     * Get Errors value
     * @return \traveltainment\SOAP17\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRSType
     */
    public function setErrors(\traveltainment\SOAP17\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\ParkingOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\ParkingOfferType $offer
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRSType
     */
    public function setOffer(\traveltainment\SOAP17\StructType\ParkingOfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get ProviderDetails value
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType|null
     */
    public function getProviderDetails()
    {
        return $this->ProviderDetails;
    }
    /**
     * Set ProviderDetails value
     * @param \traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRSType
     */
    public function setProviderDetails(\traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails = null)
    {
        $this->ProviderDetails = $providerDetails;
        return $this;
    }
    /**
     * Get ParkingDetails value
     * @return \traveltainment\SOAP17\StructType\ParkingDetailsType|null
     */
    public function getParkingDetails()
    {
        return $this->ParkingDetails;
    }
    /**
     * Set ParkingDetails value
     * @param \traveltainment\SOAP17\StructType\ParkingDetailsType $parkingDetails
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRSType
     */
    public function setParkingDetails(\traveltainment\SOAP17\StructType\ParkingDetailsType $parkingDetails = null)
    {
        $this->ParkingDetails = $parkingDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetParkingTeaserRSType
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
