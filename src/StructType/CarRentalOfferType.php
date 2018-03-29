<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRentalOfferType StructType
 * @subpackage Structs
 */
class CarRentalOfferType extends Offer3pType
{
    /**
     * The CarRentalDetails
     * @var \StructType\CarRentalDetails4SearchType
     */
    public $CarRentalDetails;
    /**
     * Constructor method for CarRentalOfferType
     * @uses CarRentalOfferType::setCarRentalDetails()
     * @param \StructType\CarRentalDetails4SearchType $carRentalDetails
     */
    public function __construct(\StructType\CarRentalDetails4SearchType $carRentalDetails = null)
    {
        $this
            ->setCarRentalDetails($carRentalDetails);
    }
    /**
     * Get CarRentalDetails value
     * @return \StructType\CarRentalDetails4SearchType|null
     */
    public function getCarRentalDetails()
    {
        return $this->CarRentalDetails;
    }
    /**
     * Set CarRentalDetails value
     * @param \StructType\CarRentalDetails4SearchType $carRentalDetails
     * @return \StructType\CarRentalOfferType
     */
    public function setCarRentalDetails(\StructType\CarRentalDetails4SearchType $carRentalDetails = null)
    {
        $this->CarRentalDetails = $carRentalDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CarRentalOfferType
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
