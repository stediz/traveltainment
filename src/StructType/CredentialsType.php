<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CredentialsType StructType
 * @subpackage Structs
 */
class CredentialsType extends AbstractStructBase
{
    /**
     * The Agency
     * @var \traveltainment\SOAP17\StructType\AgencyInformationType
     */
    public $Agency;
    /**
     * The Office
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OfficeInformationType
     */
    public $Office;
    /**
     * The ConsolidatorInformation
     * @var \traveltainment\SOAP17\StructType\ConsolidatorType
     */
    public $ConsolidatorInformation;
    /**
     * Constructor method for CredentialsType
     * @uses CredentialsType::setAgency()
     * @uses CredentialsType::setOffice()
     * @uses CredentialsType::setConsolidatorInformation()
     * @param \traveltainment\SOAP17\StructType\AgencyInformationType $agency
     * @param \traveltainment\SOAP17\StructType\OfficeInformationType $office
     * @param \traveltainment\SOAP17\StructType\ConsolidatorType $consolidatorInformation
     */
    public function __construct(\traveltainment\SOAP17\StructType\AgencyInformationType $agency = null, \traveltainment\SOAP17\StructType\OfficeInformationType $office = null, \traveltainment\SOAP17\StructType\ConsolidatorType $consolidatorInformation = null)
    {
        $this
            ->setAgency($agency)
            ->setOffice($office)
            ->setConsolidatorInformation($consolidatorInformation);
    }
    /**
     * Get Agency value
     * @return \traveltainment\SOAP17\StructType\AgencyInformationType|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param \traveltainment\SOAP17\StructType\AgencyInformationType $agency
     * @return \traveltainment\SOAP17\StructType\CredentialsType
     */
    public function setAgency(\traveltainment\SOAP17\StructType\AgencyInformationType $agency = null)
    {
        $this->Agency = $agency;
        return $this;
    }
    /**
     * Get Office value
     * @return \traveltainment\SOAP17\StructType\OfficeInformationType|null
     */
    public function getOffice()
    {
        return $this->Office;
    }
    /**
     * Set Office value
     * @param \traveltainment\SOAP17\StructType\OfficeInformationType $office
     * @return \traveltainment\SOAP17\StructType\CredentialsType
     */
    public function setOffice(\traveltainment\SOAP17\StructType\OfficeInformationType $office = null)
    {
        $this->Office = $office;
        return $this;
    }
    /**
     * Get ConsolidatorInformation value
     * @return \traveltainment\SOAP17\StructType\ConsolidatorType|null
     */
    public function getConsolidatorInformation()
    {
        return $this->ConsolidatorInformation;
    }
    /**
     * Set ConsolidatorInformation value
     * @param \traveltainment\SOAP17\StructType\ConsolidatorType $consolidatorInformation
     * @return \traveltainment\SOAP17\StructType\CredentialsType
     */
    public function setConsolidatorInformation(\traveltainment\SOAP17\StructType\ConsolidatorType $consolidatorInformation = null)
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
     * @return \traveltainment\SOAP17\StructType\CredentialsType
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
