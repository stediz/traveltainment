<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransferOfferListRQType StructType
 * @subpackage Structs
 */
class GetTransferOfferListRQType extends RequestType
{
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - documentation: Identifiziert die Session und somit die Gesamtheit der Angebotsdaten.
     * @var string
     */
    public $SessionID;
    /**
     * The ProviderID
     * Meta informations extracted from the WSDL
     * - documentation: Der Name eines Providers.
     * @var string
     */
    public $ProviderID;
    /**
     * The AdditionalCurrencies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalCurrencies;
    /**
     * Constructor method for GetTransferOfferListRQType
     * @uses GetTransferOfferListRQType::setSessionID()
     * @uses GetTransferOfferListRQType::setProviderID()
     * @uses GetTransferOfferListRQType::setAdditionalCurrencies()
     * @param string $sessionID
     * @param string $providerID
     * @param string $additionalCurrencies
     */
    public function __construct($sessionID = null, $providerID = null, $additionalCurrencies = null)
    {
        $this
            ->setSessionID($sessionID)
            ->setProviderID($providerID)
            ->setAdditionalCurrencies($additionalCurrencies);
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
     * @return \StructType\GetTransferOfferListRQType
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
     * Get ProviderID value
     * @return string|null
     */
    public function getProviderID()
    {
        return $this->ProviderID;
    }
    /**
     * Set ProviderID value
     * @param string $providerID
     * @return \StructType\GetTransferOfferListRQType
     */
    public function setProviderID($providerID = null)
    {
        // validation for constraint: string
        if (!is_null($providerID) && !is_string($providerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerID)), __LINE__);
        }
        $this->ProviderID = $providerID;
        return $this;
    }
    /**
     * Get AdditionalCurrencies value
     * @return string|null
     */
    public function getAdditionalCurrencies()
    {
        return $this->AdditionalCurrencies;
    }
    /**
     * Set AdditionalCurrencies value
     * @param string $additionalCurrencies
     * @return \StructType\GetTransferOfferListRQType
     */
    public function setAdditionalCurrencies($additionalCurrencies = null)
    {
        // validation for constraint: string
        if (!is_null($additionalCurrencies) && !is_string($additionalCurrencies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalCurrencies)), __LINE__);
        }
        $this->AdditionalCurrencies = $additionalCurrencies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransferOfferListRQType
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
