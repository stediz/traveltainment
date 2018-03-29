<?php

namespace StructType;

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
     * @var \StructType\ConditionDetailsType
     */
    public $ConditionDetails;
    /**
     * The InclusiveDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\InclusiveDetailsType
     */
    public $InclusiveDetails;
    /**
     * The OpeningHourDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\OpeningHourDetailsType
     */
    public $OpeningHourDetails;
    /**
     * Constructor method for CarRentalStationDetailsType
     * @uses CarRentalStationDetailsType::setConditionDetails()
     * @uses CarRentalStationDetailsType::setInclusiveDetails()
     * @uses CarRentalStationDetailsType::setOpeningHourDetails()
     * @param \StructType\ConditionDetailsType $conditionDetails
     * @param \StructType\InclusiveDetailsType $inclusiveDetails
     * @param \StructType\OpeningHourDetailsType $openingHourDetails
     */
    public function __construct(\StructType\ConditionDetailsType $conditionDetails = null, \StructType\InclusiveDetailsType $inclusiveDetails = null, \StructType\OpeningHourDetailsType $openingHourDetails = null)
    {
        $this
            ->setConditionDetails($conditionDetails)
            ->setInclusiveDetails($inclusiveDetails)
            ->setOpeningHourDetails($openingHourDetails);
    }
    /**
     * Get ConditionDetails value
     * @return \StructType\ConditionDetailsType|null
     */
    public function getConditionDetails()
    {
        return $this->ConditionDetails;
    }
    /**
     * Set ConditionDetails value
     * @param \StructType\ConditionDetailsType $conditionDetails
     * @return \StructType\CarRentalStationDetailsType
     */
    public function setConditionDetails(\StructType\ConditionDetailsType $conditionDetails = null)
    {
        $this->ConditionDetails = $conditionDetails;
        return $this;
    }
    /**
     * Get InclusiveDetails value
     * @return \StructType\InclusiveDetailsType|null
     */
    public function getInclusiveDetails()
    {
        return $this->InclusiveDetails;
    }
    /**
     * Set InclusiveDetails value
     * @param \StructType\InclusiveDetailsType $inclusiveDetails
     * @return \StructType\CarRentalStationDetailsType
     */
    public function setInclusiveDetails(\StructType\InclusiveDetailsType $inclusiveDetails = null)
    {
        $this->InclusiveDetails = $inclusiveDetails;
        return $this;
    }
    /**
     * Get OpeningHourDetails value
     * @return \StructType\OpeningHourDetailsType|null
     */
    public function getOpeningHourDetails()
    {
        return $this->OpeningHourDetails;
    }
    /**
     * Set OpeningHourDetails value
     * @param \StructType\OpeningHourDetailsType $openingHourDetails
     * @return \StructType\CarRentalStationDetailsType
     */
    public function setOpeningHourDetails(\StructType\OpeningHourDetailsType $openingHourDetails = null)
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
     * @return \StructType\CarRentalStationDetailsType
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
