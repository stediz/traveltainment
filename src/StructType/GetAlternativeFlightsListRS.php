<?php

namespace StructType;

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
     * @var \StructType\StatusType
     */
    public $Status;
    /**
     * The OriginalOfferInformation
     * @var \StructType\OriginalOfferInformationType
     */
    public $OriginalOfferInformation;
    /**
     * The AlternativeFlightsList
     * @var \StructType\AlternativeFlightsListType
     */
    public $AlternativeFlightsList;
    /**
     * Constructor method for GetAlternativeFlightsListRS
     * @uses GetAlternativeFlightsListRS::setStatus()
     * @uses GetAlternativeFlightsListRS::setOriginalOfferInformation()
     * @uses GetAlternativeFlightsListRS::setAlternativeFlightsList()
     * @param \StructType\StatusType $status
     * @param \StructType\OriginalOfferInformationType $originalOfferInformation
     * @param \StructType\AlternativeFlightsListType $alternativeFlightsList
     */
    public function __construct(\StructType\StatusType $status = null, \StructType\OriginalOfferInformationType $originalOfferInformation = null, \StructType\AlternativeFlightsListType $alternativeFlightsList = null)
    {
        $this
            ->setStatus($status)
            ->setOriginalOfferInformation($originalOfferInformation)
            ->setAlternativeFlightsList($alternativeFlightsList);
    }
    /**
     * Get Status value
     * @return \StructType\StatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \StructType\StatusType $status
     * @return \StructType\GetAlternativeFlightsListRS
     */
    public function setStatus(\StructType\StatusType $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get OriginalOfferInformation value
     * @return \StructType\OriginalOfferInformationType|null
     */
    public function getOriginalOfferInformation()
    {
        return $this->OriginalOfferInformation;
    }
    /**
     * Set OriginalOfferInformation value
     * @param \StructType\OriginalOfferInformationType $originalOfferInformation
     * @return \StructType\GetAlternativeFlightsListRS
     */
    public function setOriginalOfferInformation(\StructType\OriginalOfferInformationType $originalOfferInformation = null)
    {
        $this->OriginalOfferInformation = $originalOfferInformation;
        return $this;
    }
    /**
     * Get AlternativeFlightsList value
     * @return \StructType\AlternativeFlightsListType|null
     */
    public function getAlternativeFlightsList()
    {
        return $this->AlternativeFlightsList;
    }
    /**
     * Set AlternativeFlightsList value
     * @param \StructType\AlternativeFlightsListType $alternativeFlightsList
     * @return \StructType\GetAlternativeFlightsListRS
     */
    public function setAlternativeFlightsList(\StructType\AlternativeFlightsListType $alternativeFlightsList = null)
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
     * @return \StructType\GetAlternativeFlightsListRS
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
