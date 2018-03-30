<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderDetailsType StructType
 * @subpackage Structs
 */
class ProviderDetailsType extends AbstractStructBase
{
    /**
     * The ProviderID
     * @var string
     */
    public $ProviderID;
    /**
     * The ProviderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProviderName;
    /**
     * The ProviderShortName
     * @var string
     */
    public $ProviderShortName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AddressBaseType
     */
    public $Address;
    /**
     * The LogoURL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LogoURL;
    /**
     * Constructor method for ProviderDetailsType
     * @uses ProviderDetailsType::setProviderID()
     * @uses ProviderDetailsType::setProviderName()
     * @uses ProviderDetailsType::setProviderShortName()
     * @uses ProviderDetailsType::setAddress()
     * @uses ProviderDetailsType::setLogoURL()
     * @param string $providerID
     * @param string $providerName
     * @param string $providerShortName
     * @param \traveltainment\SOAP17\StructType\AddressBaseType $address
     * @param string $logoURL
     */
    public function __construct($providerID = null, $providerName = null, $providerShortName = null, \traveltainment\SOAP17\StructType\AddressBaseType $address = null, $logoURL = null)
    {
        $this
            ->setProviderID($providerID)
            ->setProviderName($providerName)
            ->setProviderShortName($providerShortName)
            ->setAddress($address)
            ->setLogoURL($logoURL);
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
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType
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
     * Get ProviderName value
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->ProviderName;
    }
    /**
     * Set ProviderName value
     * @param string $providerName
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType
     */
    public function setProviderName($providerName = null)
    {
        // validation for constraint: string
        if (!is_null($providerName) && !is_string($providerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerName)), __LINE__);
        }
        $this->ProviderName = $providerName;
        return $this;
    }
    /**
     * Get ProviderShortName value
     * @return string|null
     */
    public function getProviderShortName()
    {
        return $this->ProviderShortName;
    }
    /**
     * Set ProviderShortName value
     * @param string $providerShortName
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType
     */
    public function setProviderShortName($providerShortName = null)
    {
        // validation for constraint: string
        if (!is_null($providerShortName) && !is_string($providerShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerShortName)), __LINE__);
        }
        $this->ProviderShortName = $providerShortName;
        return $this;
    }
    /**
     * Get Address value
     * @return \traveltainment\SOAP17\StructType\AddressBaseType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \traveltainment\SOAP17\StructType\AddressBaseType $address
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType
     */
    public function setAddress(\traveltainment\SOAP17\StructType\AddressBaseType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ProviderDetailsType
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
