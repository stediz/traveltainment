<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\DateTimeSpanType
     */
    public $FlightDateTimeSpan;
    /**
     * The OutboundFlightSegments
     * @var \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public $OutboundFlightSegments;
    /**
     * The InboundFlightSegments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\FlightSegmentListType
     */
    public $InboundFlightSegments;
    /**
     * The TermsAndConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\MandatoryInformationType
     */
    public $TermsAndConditions;
    /**
     * Constructor method for FlightType
     * @uses FlightType::setFlightDateTimeSpan()
     * @uses FlightType::setOutboundFlightSegments()
     * @uses FlightType::setInboundFlightSegments()
     * @uses FlightType::setTermsAndConditions()
     * @param \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan
     * @param \traveltainment\SOAP17\StructType\FlightSegmentListType $outboundFlightSegments
     * @param \traveltainment\SOAP17\StructType\FlightSegmentListType $inboundFlightSegments
     * @param \traveltainment\SOAP17\StructType\MandatoryInformationType $termsAndConditions
     */
    public function __construct(\traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan = null, \traveltainment\SOAP17\StructType\FlightSegmentListType $outboundFlightSegments = null, \traveltainment\SOAP17\StructType\FlightSegmentListType $inboundFlightSegments = null, \traveltainment\SOAP17\StructType\MandatoryInformationType $termsAndConditions = null)
    {
        $this
            ->setFlightDateTimeSpan($flightDateTimeSpan)
            ->setOutboundFlightSegments($outboundFlightSegments)
            ->setInboundFlightSegments($inboundFlightSegments)
            ->setTermsAndConditions($termsAndConditions);
    }
    /**
     * Get FlightDateTimeSpan value
     * @return \traveltainment\SOAP17\StructType\DateTimeSpanType|null
     */
    public function getFlightDateTimeSpan()
    {
        return $this->FlightDateTimeSpan;
    }
    /**
     * Set FlightDateTimeSpan value
     * @param \traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan
     * @return \traveltainment\SOAP17\StructType\FlightType
     */
    public function setFlightDateTimeSpan(\traveltainment\SOAP17\StructType\DateTimeSpanType $flightDateTimeSpan = null)
    {
        $this->FlightDateTimeSpan = $flightDateTimeSpan;
        return $this;
    }
    /**
     * Get OutboundFlightSegments value
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType|null
     */
    public function getOutboundFlightSegments()
    {
        return $this->OutboundFlightSegments;
    }
    /**
     * Set OutboundFlightSegments value
     * @param \traveltainment\SOAP17\StructType\FlightSegmentListType $outboundFlightSegments
     * @return \traveltainment\SOAP17\StructType\FlightType
     */
    public function setOutboundFlightSegments(\traveltainment\SOAP17\StructType\FlightSegmentListType $outboundFlightSegments = null)
    {
        $this->OutboundFlightSegments = $outboundFlightSegments;
        return $this;
    }
    /**
     * Get InboundFlightSegments value
     * @return \traveltainment\SOAP17\StructType\FlightSegmentListType|null
     */
    public function getInboundFlightSegments()
    {
        return $this->InboundFlightSegments;
    }
    /**
     * Set InboundFlightSegments value
     * @param \traveltainment\SOAP17\StructType\FlightSegmentListType $inboundFlightSegments
     * @return \traveltainment\SOAP17\StructType\FlightType
     */
    public function setInboundFlightSegments(\traveltainment\SOAP17\StructType\FlightSegmentListType $inboundFlightSegments = null)
    {
        $this->InboundFlightSegments = $inboundFlightSegments;
        return $this;
    }
    /**
     * Get TermsAndConditions value
     * @return \traveltainment\SOAP17\StructType\MandatoryInformationType|null
     */
    public function getTermsAndConditions()
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param \traveltainment\SOAP17\StructType\MandatoryInformationType $termsAndConditions
     * @return \traveltainment\SOAP17\StructType\FlightType
     */
    public function setTermsAndConditions(\traveltainment\SOAP17\StructType\MandatoryInformationType $termsAndConditions = null)
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
     * @return \traveltainment\SOAP17\StructType\FlightType
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
