<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginalOfferInformationType StructType
 * @subpackage Structs
 */
class OriginalOfferInformationType extends AbstractStructBase
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
     * The PackageTourOperator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PackageTourOperator;
    /**
     * The HotelCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HotelCode;
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
     * Constructor method for OriginalOfferInformationType
     * @uses OriginalOfferInformationType::setOutboundFlight()
     * @uses OriginalOfferInformationType::setPackageTourOperator()
     * @uses OriginalOfferInformationType::setHotelCode()
     * @uses OriginalOfferInformationType::setInboundFlight()
     * @uses OriginalOfferInformationType::setPriceInformation()
     * @param \StructType\AlternativeFlightDetailsType $outboundFlight
     * @param string $packageTourOperator
     * @param string $hotelCode
     * @param \StructType\AlternativeFlightDetailsType $inboundFlight
     * @param \StructType\PriceInformationType $priceInformation
     */
    public function __construct(\StructType\AlternativeFlightDetailsType $outboundFlight = null, $packageTourOperator = null, $hotelCode = null, \StructType\AlternativeFlightDetailsType $inboundFlight = null, \StructType\PriceInformationType $priceInformation = null)
    {
        $this
            ->setOutboundFlight($outboundFlight)
            ->setPackageTourOperator($packageTourOperator)
            ->setHotelCode($hotelCode)
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
     * @return \StructType\OriginalOfferInformationType
     */
    public function setOutboundFlight(\StructType\AlternativeFlightDetailsType $outboundFlight = null)
    {
        $this->OutboundFlight = $outboundFlight;
        return $this;
    }
    /**
     * Get PackageTourOperator value
     * @return string
     */
    public function getPackageTourOperator()
    {
        return $this->PackageTourOperator;
    }
    /**
     * Set PackageTourOperator value
     * @param string $packageTourOperator
     * @return \StructType\OriginalOfferInformationType
     */
    public function setPackageTourOperator($packageTourOperator = null)
    {
        // validation for constraint: string
        if (!is_null($packageTourOperator) && !is_string($packageTourOperator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageTourOperator)), __LINE__);
        }
        $this->PackageTourOperator = $packageTourOperator;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \StructType\OriginalOfferInformationType
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
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
     * @return \StructType\OriginalOfferInformationType
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
     * @return \StructType\OriginalOfferInformationType
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
     * @return \StructType\OriginalOfferInformationType
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
