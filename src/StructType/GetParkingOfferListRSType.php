<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParkingOfferListRSType StructType
 * @subpackage Structs
 */
class GetParkingOfferListRSType extends ResponseType
{
    /**
     * The Errors
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Offers
     * @var \StructType\ParkingOffersType
     */
    public $Offers;
    /**
     * The ProviderDetails
     * @var \StructType\ProviderDetailsType
     */
    public $ProviderDetails;
    /**
     * Constructor method for GetParkingOfferListRSType
     * @uses GetParkingOfferListRSType::setErrors()
     * @uses GetParkingOfferListRSType::setOffers()
     * @uses GetParkingOfferListRSType::setProviderDetails()
     * @param \StructType\ErrorsType $errors
     * @param \StructType\ParkingOffersType $offers
     * @param \StructType\ProviderDetailsType $providerDetails
     */
    public function __construct(\StructType\ErrorsType $errors = null, \StructType\ParkingOffersType $offers = null, \StructType\ProviderDetailsType $providerDetails = null)
    {
        $this
            ->setErrors($errors)
            ->setOffers($offers)
            ->setProviderDetails($providerDetails);
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
     * @return \StructType\GetParkingOfferListRSType
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Offers value
     * @return \StructType\ParkingOffersType|null
     */
    public function getOffers()
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param \StructType\ParkingOffersType $offers
     * @return \StructType\GetParkingOfferListRSType
     */
    public function setOffers(\StructType\ParkingOffersType $offers = null)
    {
        $this->Offers = $offers;
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
     * @return \StructType\GetParkingOfferListRSType
     */
    public function setProviderDetails(\StructType\ProviderDetailsType $providerDetails = null)
    {
        $this->ProviderDetails = $providerDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetParkingOfferListRSType
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
