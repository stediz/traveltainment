<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightType StructType
 * @subpackage Structs
 */
class FlightType extends AbstractStructBase
{
    /**
     * The FlightDateTimeSpan
     * Meta informations extracted from the WSDL
     * - documentation: Es gibt hier den kompletten Flugzeitraum. Also vom ersten Starttermin des Hinflugs bis zum letzten des Ruecklfugs.
     * - minOccurs: 0
     * @var \StructType\DateTimeSpanType
     */
    public $FlightDateTimeSpan;
    /**
     * The OutboundFlightSegments
     * @var \StructType\FlightSegmentListType
     */
    public $OutboundFlightSegments;
    /**
     * The InboundFlightSegments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\FlightSegmentListType
     */
    public $InboundFlightSegments;
    /**
     * The TermsAndConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\MandatoryInformationType
     */
    public $TermsAndConditions;
    /**
     * Constructor method for FlightType
     * @uses FlightType::setFlightDateTimeSpan()
     * @uses FlightType::setOutboundFlightSegments()
     * @uses FlightType::setInboundFlightSegments()
     * @uses FlightType::setTermsAndConditions()
     * @param \StructType\DateTimeSpanType $flightDateTimeSpan
     * @param \StructType\FlightSegmentListType $outboundFlightSegments
     * @param \StructType\FlightSegmentListType $inboundFlightSegments
     * @param \StructType\MandatoryInformationType $termsAndConditions
     */
    public function __construct(\StructType\DateTimeSpanType $flightDateTimeSpan = null, \StructType\FlightSegmentListType $outboundFlightSegments = null, \StructType\FlightSegmentListType $inboundFlightSegments = null, \StructType\MandatoryInformationType $termsAndConditions = null)
    {
        $this
            ->setFlightDateTimeSpan($flightDateTimeSpan)
            ->setOutboundFlightSegments($outboundFlightSegments)
            ->setInboundFlightSegments($inboundFlightSegments)
            ->setTermsAndConditions($termsAndConditions);
    }
    /**
     * Get FlightDateTimeSpan value
     * @return \StructType\DateTimeSpanType|null
     */
    public function getFlightDateTimeSpan()
    {
        return $this->FlightDateTimeSpan;
    }
    /**
     * Set FlightDateTimeSpan value
     * @param \StructType\DateTimeSpanType $flightDateTimeSpan
     * @return \StructType\FlightType
     */
    public function setFlightDateTimeSpan(\StructType\DateTimeSpanType $flightDateTimeSpan = null)
    {
        $this->FlightDateTimeSpan = $flightDateTimeSpan;
        return $this;
    }
    /**
     * Get OutboundFlightSegments value
     * @return \StructType\FlightSegmentListType|null
     */
    public function getOutboundFlightSegments()
    {
        return $this->OutboundFlightSegments;
    }
    /**
     * Set OutboundFlightSegments value
     * @param \StructType\FlightSegmentListType $outboundFlightSegments
     * @return \StructType\FlightType
     */
    public function setOutboundFlightSegments(\StructType\FlightSegmentListType $outboundFlightSegments = null)
    {
        $this->OutboundFlightSegments = $outboundFlightSegments;
        return $this;
    }
    /**
     * Get InboundFlightSegments value
     * @return \StructType\FlightSegmentListType|null
     */
    public function getInboundFlightSegments()
    {
        return $this->InboundFlightSegments;
    }
    /**
     * Set InboundFlightSegments value
     * @param \StructType\FlightSegmentListType $inboundFlightSegments
     * @return \StructType\FlightType
     */
    public function setInboundFlightSegments(\StructType\FlightSegmentListType $inboundFlightSegments = null)
    {
        $this->InboundFlightSegments = $inboundFlightSegments;
        return $this;
    }
    /**
     * Get TermsAndConditions value
     * @return \StructType\MandatoryInformationType|null
     */
    public function getTermsAndConditions()
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param \StructType\MandatoryInformationType $termsAndConditions
     * @return \StructType\FlightType
     */
    public function setTermsAndConditions(\StructType\MandatoryInformationType $termsAndConditions = null)
    {
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FlightType
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
