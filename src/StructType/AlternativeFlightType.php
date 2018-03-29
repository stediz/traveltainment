<?php

namespace StructType;

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
     * @var \StructType\AlternativeFlightDetailsType
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
     * @var \StructType\AlternativeFlightDetailsType
     */
    public $InboundFlight;
    /**
     * The PriceInformation
     * @var \StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * Constructor method for AlternativeFlightType
     * @uses AlternativeFlightType::setOutboundFlight()
     * @uses AlternativeFlightType::setAlternativeFlightKey()
     * @uses AlternativeFlightType::setInboundFlight()
     * @uses AlternativeFlightType::setPriceInformation()
     * @param \StructType\AlternativeFlightDetailsType $outboundFlight
     * @param string $alternativeFlightKey
     * @param \StructType\AlternativeFlightDetailsType $inboundFlight
     * @param \StructType\PriceInformationType $priceInformation
     */
    public function __construct(\StructType\AlternativeFlightDetailsType $outboundFlight = null, $alternativeFlightKey = null, \StructType\AlternativeFlightDetailsType $inboundFlight = null, \StructType\PriceInformationType $priceInformation = null)
    {
        $this
            ->setOutboundFlight($outboundFlight)
            ->setAlternativeFlightKey($alternativeFlightKey)
            ->setInboundFlight($inboundFlight)
            ->setPriceInformation($priceInformation);
    }
    /**
     * Get OutboundFlight value
     * @return \StructType\AlternativeFlightDetailsType
     */
    public function getOutboundFlight()
    {
        return $this->OutboundFlight;
    }
    /**
     * Set OutboundFlight value
     * @param \StructType\AlternativeFlightDetailsType $outboundFlight
     * @return \StructType\AlternativeFlightType
     */
    public function setOutboundFlight(\StructType\AlternativeFlightDetailsType $outboundFlight = null)
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
     * @return \StructType\AlternativeFlightType
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
     * @return \StructType\AlternativeFlightDetailsType|null
     */
    public function getInboundFlight()
    {
        return $this->InboundFlight;
    }
    /**
     * Set InboundFlight value
     * @param \StructType\AlternativeFlightDetailsType $inboundFlight
     * @return \StructType\AlternativeFlightType
     */
    public function setInboundFlight(\StructType\AlternativeFlightDetailsType $inboundFlight = null)
    {
        $this->InboundFlight = $inboundFlight;
        return $this;
    }
    /**
     * Get PriceInformation value
     * @return \StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \StructType\PriceInformationType $priceInformation
     * @return \StructType\AlternativeFlightType
     */
    public function setPriceInformation(\StructType\PriceInformationType $priceInformation = null)
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
     * @return \StructType\AlternativeFlightType
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
