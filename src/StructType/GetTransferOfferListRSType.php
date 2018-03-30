<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransferOfferListRSType StructType
 * @subpackage Structs
 */
class GetTransferOfferListRSType extends ResponseType
{
    /**
     * The Errors
     * @var \traveltainment\SOAP17\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Offers
     * @var \traveltainment\SOAP17\StructType\TransferOffersType
     */
    public $Offers;
    /**
     * The ProviderDetails
     * @var \traveltainment\SOAP17\StructType\ProviderDetailsType
     */
    public $ProviderDetails;
    /**
     * Constructor method for GetTransferOfferListRSType
     * @uses GetTransferOfferListRSType::setErrors()
     * @uses GetTransferOfferListRSType::setOffers()
     * @uses GetTransferOfferListRSType::setProviderDetails()
     * @param \traveltainment\SOAP17\StructType\ErrorsType $errors
     * @param \traveltainment\SOAP17\StructType\TransferOffersType $offers
     * @param \traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails
     */
    public function __construct(\traveltainment\SOAP17\StructType\ErrorsType $errors = null, \traveltainment\SOAP17\StructType\TransferOffersType $offers = null, \traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails = null)
    {
        $this
            ->setErrors($errors)
            ->setOffers($offers)
            ->setProviderDetails($providerDetails);
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
     * @return \traveltainment\SOAP17\StructType\GetTransferOfferListRSType
     */
    public function setErrors(\traveltainment\SOAP17\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Offers value
     * @return \traveltainment\SOAP17\StructType\TransferOffersType|null
     */
    public function getOffers()
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param \traveltainment\SOAP17\StructType\TransferOffersType $offers
     * @return \traveltainment\SOAP17\StructType\GetTransferOfferListRSType
     */
    public function setOffers(\traveltainment\SOAP17\StructType\TransferOffersType $offers = null)
    {
        $this->Offers = $offers;
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
     * @return \traveltainment\SOAP17\StructType\GetTransferOfferListRSType
     */
    public function setProviderDetails(\traveltainment\SOAP17\StructType\ProviderDetailsType $providerDetails = null)
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
     * @return \traveltainment\SOAP17\StructType\GetTransferOfferListRSType
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
