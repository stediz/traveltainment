<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOfferDataRSType StructType
 * @subpackage Structs
 */
class GetAvailableOfferDataRSType extends ResponseType
{
    /**
     * The Errors
     * @var \StructType\ErrorsType
     */
    public $Errors;
    /**
     * The SessionID
     * @var string
     */
    public $SessionID;
    /**
     * The OfferExpirationTime
     * @var string
     */
    public $OfferExpirationTime;
    /**
     * The Offer
     * @var \StructType\AvailableOfferType
     */
    public $Offer;
    /**
     * The Allowed3PProviders
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AllProvidersType
     */
    public $Allowed3PProviders;
    /**
     * Constructor method for GetAvailableOfferDataRSType
     * @uses GetAvailableOfferDataRSType::setErrors()
     * @uses GetAvailableOfferDataRSType::setSessionID()
     * @uses GetAvailableOfferDataRSType::setOfferExpirationTime()
     * @uses GetAvailableOfferDataRSType::setOffer()
     * @uses GetAvailableOfferDataRSType::setAllowed3PProviders()
     * @param \StructType\ErrorsType $errors
     * @param string $sessionID
     * @param string $offerExpirationTime
     * @param \StructType\AvailableOfferType $offer
     * @param \StructType\AllProvidersType $allowed3PProviders
     */
    public function __construct(\StructType\ErrorsType $errors = null, $sessionID = null, $offerExpirationTime = null, \StructType\AvailableOfferType $offer = null, \StructType\AllProvidersType $allowed3PProviders = null)
    {
        $this
            ->setErrors($errors)
            ->setSessionID($sessionID)
            ->setOfferExpirationTime($offerExpirationTime)
            ->setOffer($offer)
            ->setAllowed3PProviders($allowed3PProviders);
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
     * @return \StructType\GetAvailableOfferDataRSType
     */
    public function setErrors(\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \StructType\GetAvailableOfferDataRSType
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get OfferExpirationTime value
     * @return string|null
     */
    public function getOfferExpirationTime()
    {
        return $this->OfferExpirationTime;
    }
    /**
     * Set OfferExpirationTime value
     * @param string $offerExpirationTime
     * @return \StructType\GetAvailableOfferDataRSType
     */
    public function setOfferExpirationTime($offerExpirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($offerExpirationTime) && !is_string($offerExpirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerExpirationTime)), __LINE__);
        }
        $this->OfferExpirationTime = $offerExpirationTime;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\AvailableOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\AvailableOfferType $offer
     * @return \StructType\GetAvailableOfferDataRSType
     */
    public function setOffer(\StructType\AvailableOfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get Allowed3PProviders value
     * @return \StructType\AllProvidersType|null
     */
    public function getAllowed3PProviders()
    {
        return $this->Allowed3PProviders;
    }
    /**
     * Set Allowed3PProviders value
     * @param \StructType\AllProvidersType $allowed3PProviders
     * @return \StructType\GetAvailableOfferDataRSType
     */
    public function setAllowed3PProviders(\StructType\AllProvidersType $allowed3PProviders = null)
    {
        $this->Allowed3PProviders = $allowed3PProviders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetAvailableOfferDataRSType
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
