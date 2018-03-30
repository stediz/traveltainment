<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternativeFlightType StructType
 * @subpackage Structs
 */
class AlternativeFlightType extends AbstractStructBase
{
    /**
     * The OutboundFlight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType
     */
    public $OutboundFlight;
    /**
     * The AlternativeFlightKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AlternativeFlightKey;
    /**
     * The InboundFlight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType
     */
    public $InboundFlight;
    /**
     * The PriceInformation
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * Constructor method for AlternativeFlightType
     * @uses AlternativeFlightType::setOutboundFlight()
     * @uses AlternativeFlightType::setAlternativeFlightKey()
     * @uses AlternativeFlightType::setInboundFlight()
     * @uses AlternativeFlightType::setPriceInformation()
     * @param \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $outboundFlight
     * @param string $alternativeFlightKey
     * @param \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $inboundFlight
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     */
    public function __construct(\traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $outboundFlight = null, $alternativeFlightKey = null, \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $inboundFlight = null, \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null)
    {
        $this
            ->setOutboundFlight($outboundFlight)
            ->setAlternativeFlightKey($alternativeFlightKey)
            ->setInboundFlight($inboundFlight)
            ->setPriceInformation($priceInformation);
    }
    /**
     * Get OutboundFlight value
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType
     */
    public function getOutboundFlight()
    {
        return $this->OutboundFlight;
    }
    /**
     * Set OutboundFlight value
     * @param \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $outboundFlight
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightType
     */
    public function setOutboundFlight(\traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $outboundFlight = null)
    {
        $this->OutboundFlight = $outboundFlight;
        return $this;
    }
    /**
     * Get AlternativeFlightKey value
     * @return string
     */
    public function getAlternativeFlightKey()
    {
        return $this->AlternativeFlightKey;
    }
    /**
     * Set AlternativeFlightKey value
     * @param string $alternativeFlightKey
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightType
     */
    public function setAlternativeFlightKey($alternativeFlightKey = null)
    {
        // validation for constraint: string
        if (!is_null($alternativeFlightKey) && !is_string($alternativeFlightKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alternativeFlightKey)), __LINE__);
        }
        $this->AlternativeFlightKey = $alternativeFlightKey;
        return $this;
    }
    /**
     * Get InboundFlight value
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType|null
     */
    public function getInboundFlight()
    {
        return $this->InboundFlight;
    }
    /**
     * Set InboundFlight value
     * @param \traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $inboundFlight
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightType
     */
    public function setInboundFlight(\traveltainment\SOAP17\StructType\AlternativeFlightDetailsType $inboundFlight = null)
    {
        $this->InboundFlight = $inboundFlight;
        return $this;
    }
    /**
     * Get PriceInformation value
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightType
     */
    public function setPriceInformation(\traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightType
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
