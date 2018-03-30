<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalStationDetailsType StructType
 * @subpackage Structs
 */
class CarRentalStationDetailsType extends AbstractStructBase
{
    /**
     * The ConditionDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ConditionDetailsType
     */
    public $ConditionDetails;
    /**
     * The InclusiveDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\InclusiveDetailsType
     */
    public $InclusiveDetails;
    /**
     * The OpeningHourDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\OpeningHourDetailsType
     */
    public $OpeningHourDetails;
    /**
     * Constructor method for CarRentalStationDetailsType
     * @uses CarRentalStationDetailsType::setConditionDetails()
     * @uses CarRentalStationDetailsType::setInclusiveDetails()
     * @uses CarRentalStationDetailsType::setOpeningHourDetails()
     * @param \traveltainment\SOAP17\StructType\ConditionDetailsType $conditionDetails
     * @param \traveltainment\SOAP17\StructType\InclusiveDetailsType $inclusiveDetails
     * @param \traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails
     */
    public function __construct(\traveltainment\SOAP17\StructType\ConditionDetailsType $conditionDetails = null, \traveltainment\SOAP17\StructType\InclusiveDetailsType $inclusiveDetails = null, \traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails = null)
    {
        $this
            ->setConditionDetails($conditionDetails)
            ->setInclusiveDetails($inclusiveDetails)
            ->setOpeningHourDetails($openingHourDetails);
    }
    /**
     * Get ConditionDetails value
     * @return \traveltainment\SOAP17\StructType\ConditionDetailsType|null
     */
    public function getConditionDetails()
    {
        return $this->ConditionDetails;
    }
    /**
     * Set ConditionDetails value
     * @param \traveltainment\SOAP17\StructType\ConditionDetailsType $conditionDetails
     * @return \traveltainment\SOAP17\StructType\CarRentalStationDetailsType
     */
    public function setConditionDetails(\traveltainment\SOAP17\StructType\ConditionDetailsType $conditionDetails = null)
    {
        $this->ConditionDetails = $conditionDetails;
        return $this;
    }
    /**
     * Get InclusiveDetails value
     * @return \traveltainment\SOAP17\StructType\InclusiveDetailsType|null
     */
    public function getInclusiveDetails()
    {
        return $this->InclusiveDetails;
    }
    /**
     * Set InclusiveDetails value
     * @param \traveltainment\SOAP17\StructType\InclusiveDetailsType $inclusiveDetails
     * @return \traveltainment\SOAP17\StructType\CarRentalStationDetailsType
     */
    public function setInclusiveDetails(\traveltainment\SOAP17\StructType\InclusiveDetailsType $inclusiveDetails = null)
    {
        $this->InclusiveDetails = $inclusiveDetails;
        return $this;
    }
    /**
     * Get OpeningHourDetails value
     * @return \traveltainment\SOAP17\StructType\OpeningHourDetailsType|null
     */
    public function getOpeningHourDetails()
    {
        return $this->OpeningHourDetails;
    }
    /**
     * Set OpeningHourDetails value
     * @param \traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails
     * @return \traveltainment\SOAP17\StructType\CarRentalStationDetailsType
     */
    public function setOpeningHourDetails(\traveltainment\SOAP17\StructType\OpeningHourDetailsType $openingHourDetails = null)
    {
        $this->OpeningHourDetails = $openingHourDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CarRentalStationDetailsType
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
