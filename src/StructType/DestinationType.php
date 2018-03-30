<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationType StructType
 * @subpackage Structs
 */
class DestinationType extends AbstractStructBase
{
    /**
     * The CountryName
     * @var \traveltainment\SOAP17\StructType\CountryNameInfoType
     */
    public $CountryName;
    /**
     * The DepartureDate
     * @var string
     */
    public $DepartureDate;
    /**
     * The ArrivalDate
     * @var string
     */
    public $ArrivalDate;
    /**
     * Constructor method for DestinationType
     * @uses DestinationType::setCountryName()
     * @uses DestinationType::setDepartureDate()
     * @uses DestinationType::setArrivalDate()
     * @param \traveltainment\SOAP17\StructType\CountryNameInfoType $countryName
     * @param string $departureDate
     * @param string $arrivalDate
     */
    public function __construct(\traveltainment\SOAP17\StructType\CountryNameInfoType $countryName = null, $departureDate = null, $arrivalDate = null)
    {
        $this
            ->setCountryName($countryName)
            ->setDepartureDate($departureDate)
            ->setArrivalDate($arrivalDate);
    }
    /**
     * Get CountryName value
     * @return \traveltainment\SOAP17\StructType\CountryNameInfoType|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param \traveltainment\SOAP17\StructType\CountryNameInfoType $countryName
     * @return \traveltainment\SOAP17\StructType\DestinationType
     */
    public function setCountryName(\traveltainment\SOAP17\StructType\CountryNameInfoType $countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \traveltainment\SOAP17\StructType\DestinationType
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        return $this;
    }
    /**
     * Get ArrivalDate value
     * @return string|null
     */
    public function getArrivalDate()
    {
        return $this->ArrivalDate;
    }
    /**
     * Set ArrivalDate value
     * @param string $arrivalDate
     * @return \traveltainment\SOAP17\StructType\DestinationType
     */
    public function setArrivalDate($arrivalDate = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDate)), __LINE__);
        }
        $this->ArrivalDate = $arrivalDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\DestinationType
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
