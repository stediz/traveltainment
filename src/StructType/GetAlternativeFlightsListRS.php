<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAlternativeFlightsListRS StructType
 * @subpackage Structs
 */
class GetAlternativeFlightsListRS extends XmlInterfaceRS
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\StatusType
     */
    public $Status;
    /**
     * The OriginalOfferInformation
     * @var \traveltainment\SOAP17\StructType\OriginalOfferInformationType
     */
    public $OriginalOfferInformation;
    /**
     * The AlternativeFlightsList
     * @var \traveltainment\SOAP17\StructType\AlternativeFlightsListType
     */
    public $AlternativeFlightsList;
    /**
     * Constructor method for GetAlternativeFlightsListRS
     * @uses GetAlternativeFlightsListRS::setStatus()
     * @uses GetAlternativeFlightsListRS::setOriginalOfferInformation()
     * @uses GetAlternativeFlightsListRS::setAlternativeFlightsList()
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @param \traveltainment\SOAP17\StructType\OriginalOfferInformationType $originalOfferInformation
     * @param \traveltainment\SOAP17\StructType\AlternativeFlightsListType $alternativeFlightsList
     */
    public function __construct(\traveltainment\SOAP17\StructType\StatusType $status = null, \traveltainment\SOAP17\StructType\OriginalOfferInformationType $originalOfferInformation = null, \traveltainment\SOAP17\StructType\AlternativeFlightsListType $alternativeFlightsList = null)
    {
        $this
            ->setStatus($status)
            ->setOriginalOfferInformation($originalOfferInformation)
            ->setAlternativeFlightsList($alternativeFlightsList);
    }
    /**
     * Get Status value
     * @return \traveltainment\SOAP17\StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \traveltainment\SOAP17\StructType\StatusType $status
     * @return \traveltainment\SOAP17\StructType\GetAlternativeFlightsListRS
     */
    public function setStatus(\traveltainment\SOAP17\StructType\StatusType $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get OriginalOfferInformation value
     * @return \traveltainment\SOAP17\StructType\OriginalOfferInformationType|null
     */
    public function getOriginalOfferInformation()
    {
        return $this->OriginalOfferInformation;
    }
    /**
     * Set OriginalOfferInformation value
     * @param \traveltainment\SOAP17\StructType\OriginalOfferInformationType $originalOfferInformation
     * @return \traveltainment\SOAP17\StructType\GetAlternativeFlightsListRS
     */
    public function setOriginalOfferInformation(\traveltainment\SOAP17\StructType\OriginalOfferInformationType $originalOfferInformation = null)
    {
        $this->OriginalOfferInformation = $originalOfferInformation;
        return $this;
    }
    /**
     * Get AlternativeFlightsList value
     * @return \traveltainment\SOAP17\StructType\AlternativeFlightsListType|null
     */
    public function getAlternativeFlightsList()
    {
        return $this->AlternativeFlightsList;
    }
    /**
     * Set AlternativeFlightsList value
     * @param \traveltainment\SOAP17\StructType\AlternativeFlightsListType $alternativeFlightsList
     * @return \traveltainment\SOAP17\StructType\GetAlternativeFlightsListRS
     */
    public function setAlternativeFlightsList(\traveltainment\SOAP17\StructType\AlternativeFlightsListType $alternativeFlightsList = null)
    {
        $this->AlternativeFlightsList = $alternativeFlightsList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\GetAlternativeFlightsListRS
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
