<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CredentialsType StructType
 * @subpackage Structs
 */
class CredentialsType extends AbstractStructBase
{
    /**
     * The Agency
     * @var \StructType\AgencyInformationType
     */
    public $Agency;
    /**
     * The Office
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OfficeInformationType
     */
    public $Office;
    /**
     * The ConsolidatorInformation
     * @var \StructType\ConsolidatorType
     */
    public $ConsolidatorInformation;
    /**
     * Constructor method for CredentialsType
     * @uses CredentialsType::setAgency()
     * @uses CredentialsType::setOffice()
     * @uses CredentialsType::setConsolidatorInformation()
     * @param \StructType\AgencyInformationType $agency
     * @param \StructType\OfficeInformationType $office
     * @param \StructType\ConsolidatorType $consolidatorInformation
     */
    public function __construct(\StructType\AgencyInformationType $agency = null, \StructType\OfficeInformationType $office = null, \StructType\ConsolidatorType $consolidatorInformation = null)
    {
        $this
            ->setAgency($agency)
            ->setOffice($office)
            ->setConsolidatorInformation($consolidatorInformation);
    }
    /**
     * Get Agency value
     * @return \StructType\AgencyInformationType|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param \StructType\AgencyInformationType $agency
     * @return \StructType\CredentialsType
     */
    public function setAgency(\StructType\AgencyInformationType $agency = null)
    {
        $this->Agency = $agency;
        return $this;
    }
    /**
     * Get Office value
     * @return \StructType\OfficeInformationType|null
     */
    public function getOffice()
    {
        return $this->Office;
    }
    /**
     * Set Office value
     * @param \StructType\OfficeInformationType $office
     * @return \StructType\CredentialsType
     */
    public function setOffice(\StructType\OfficeInformationType $office = null)
    {
        $this->Office = $office;
        return $this;
    }
    /**
     * Get ConsolidatorInformation value
     * @return \StructType\ConsolidatorType|null
     */
    public function getConsolidatorInformation()
    {
        return $this->ConsolidatorInformation;
    }
    /**
     * Set ConsolidatorInformation value
     * @param \StructType\ConsolidatorType $consolidatorInformation
     * @return \StructType\CredentialsType
     */
    public function setConsolidatorInformation(\StructType\ConsolidatorType $consolidatorInformation = null)
    {
        $this->ConsolidatorInformation = $consolidatorInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CredentialsType
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
