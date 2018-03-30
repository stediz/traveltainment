<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOfferDataRQType StructType
 * @subpackage Structs
 */
class GetAvailableOfferDataRQType extends RequestType
{
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - documentation: Identifiziert die Session und somit die Gesamtheit der Angebotsdaten.
     * @var string
     */
    public $SessionID;
    /**
     * The CID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CID;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQOptionsType
     */
    public $Options;
    /**
     * Constructor method for GetAvailableOfferDataRQType
     * @uses GetAvailableOfferDataRQType::setSessionID()
     * @uses GetAvailableOfferDataRQType::setCID()
     * @uses GetAvailableOfferDataRQType::setOptions()
     * @param string $sessionID
     * @param string $cID
     * @param \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQOptionsType $options
     */
    public function __construct($sessionID = null, $cID = null, \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQOptionsType $options = null)
    {
        $this
            ->setSessionID($sessionID)
            ->setCID($cID)
            ->setOptions($options);
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
     * @return \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType
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
     * Get CID value
     * @return string|null
     */
    public function getCID()
    {
        return $this->CID;
    }
    /**
     * Set CID value
     * @param string $cID
     * @return \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType
     */
    public function setCID($cID = null)
    {
        // validation for constraint: string
        if (!is_null($cID) && !is_string($cID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cID)), __LINE__);
        }
        $this->CID = $cID;
        return $this;
    }
    /**
     * Get Options value
     * @return \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQOptionsType|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQOptionsType $options
     * @return \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType
     */
    public function setOptions(\traveltainment\SOAP17\StructType\GetAvailableOfferDataRQOptionsType $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetAvailableOfferDataRQType
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
