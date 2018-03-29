<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParkingTeaserRSType StructType
 * @subpackage Structs
 */
class GetParkingTeaserRSType extends ResponseType
{
    /**
     * The Errors
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Offer
     * @var \StructType\ParkingOfferType
     */
    public $Offer;
    /**
     * The ProviderDetails
     * @var \StructType\ProviderDetailsType
     */
    public $ProviderDetails;
    /**
     * The ParkingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ParkingDetailsType
     */
    public $ParkingDetails;
    /**
     * Constructor method for GetParkingTeaserRSType
     * @uses GetParkingTeaserRSType::setErrors()
     * @uses GetParkingTeaserRSType::setOffer()
     * @uses GetParkingTeaserRSType::setProviderDetails()
     * @uses GetParkingTeaserRSType::setParkingDetails()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\ParkingOfferType $offer
     * @param \StructType\ProviderDetailsType $providerDetails
     * @param \StructType\ParkingDetailsType $parkingDetails
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\ParkingOfferType $offer = null, \StructType\ProviderDetailsType $providerDetails = null, \StructType\ParkingDetailsType $parkingDetails = null)
    {
        $this
            ->setErrors($errors)
            ->setOffer($offer)
            ->setProviderDetails($providerDetails)
            ->setParkingDetails($parkingDetails);
    }
    /**
     * Get Errors value
     * @return \StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \StructType\ErrorsType $errors
     * @return \StructType\GetParkingTeaserRSType
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\ParkingOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\ParkingOfferType $offer
     * @return \StructType\GetParkingTeaserRSType
     */
    public function setOffer(\StructType\ParkingOfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get ProviderDetails value
     * @return \StructType\ProviderDetailsType|null
     */
    public function getProviderDetails()
    {
        return $this->ProviderDetails;
    }
    /**
     * Set ProviderDetails value
     * @param \StructType\ProviderDetailsType $providerDetails
     * @return \StructType\GetParkingTeaserRSType
     */
    public function setProviderDetails(\StructType\ProviderDetailsType $providerDetails = null)
    {
        $this->ProviderDetails = $providerDetails;
        return $this;
    }
    /**
     * Get ParkingDetails value
     * @return \StructType\ParkingDetailsType|null
     */
    public function getParkingDetails()
    {
        return $this->ParkingDetails;
    }
    /**
     * Set ParkingDetails value
     * @param \StructType\ParkingDetailsType $parkingDetails
     * @return \StructType\GetParkingTeaserRSType
     */
    public function setParkingDetails(\StructType\ParkingDetailsType $parkingDetails = null)
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
     * @return \StructType\GetParkingTeaserRSType
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
