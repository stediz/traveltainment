<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressBaseType StructType
 * @subpackage Structs
 */
class AddressBaseType extends AbstractStructBase
{
    /**
     * The StreetNumber
     * @var \StructType\StreetNumberType
     */
    public $StreetNumber;
    /**
     * The BuildingRoom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BuildingRoom;
    /**
     * The PostOfficeBoxNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostOfficeBoxNumber;
    /**
     * The AdditionalAddressLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalAddressLine;
    /**
     * The CityName
     * @var \StructType\CityNameType
     */
    public $CityName;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $County;
    /**
     * The CountryName
     * @var \StructType\CountryNameType
     */
    public $CountryName;
    /**
     * Constructor method for AddressBaseType
     * @uses AddressBaseType::setStreetNumber()
     * @uses AddressBaseType::setBuildingRoom()
     * @uses AddressBaseType::setPostOfficeBoxNumber()
     * @uses AddressBaseType::setAdditionalAddressLine()
     * @uses AddressBaseType::setCityName()
     * @uses AddressBaseType::setCounty()
     * @uses AddressBaseType::setCountryName()
     * @param \StructType\StreetNumberType $streetNumber
     * @param string $buildingRoom
     * @param string $postOfficeBoxNumber
     * @param string $additionalAddressLine
     * @param \StructType\CityNameType $cityName
     * @param string $county
     * @param \StructType\CountryNameType $countryName
     */
    public function __construct(\StructType\StreetNumberType $streetNumber = null, $buildingRoom = null, $postOfficeBoxNumber = null, $additionalAddressLine = null, \StructType\CityNameType $cityName = null, $county = null, \StructType\CountryNameType $countryName = null)
    {
        $this
            ->setStreetNumber($streetNumber)
            ->setBuildingRoom($buildingRoom)
            ->setPostOfficeBoxNumber($postOfficeBoxNumber)
            ->setAdditionalAddressLine($additionalAddressLine)
            ->setCityName($cityName)
            ->setCounty($county)
            ->setCountryName($countryName);
    }
    /**
     * Get StreetNumber value
     * @return \StructType\StreetNumberType|null
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }
    /**
     * Set StreetNumber value
     * @param \StructType\StreetNumberType $streetNumber
     * @return \StructType\AddressBaseType
     */
    public function setStreetNumber(\StructType\StreetNumberType $streetNumber = null)
    {
        $this->StreetNumber = $streetNumber;
        return $this;
    }
    /**
     * Get BuildingRoom value
     * @return string|null
     */
    public function getBuildingRoom()
    {
        return $this->BuildingRoom;
    }
    /**
     * Set BuildingRoom value
     * @param string $buildingRoom
     * @return \StructType\AddressBaseType
     */
    public function setBuildingRoom($buildingRoom = null)
    {
        // validation for constraint: string
        if (!is_null($buildingRoom) && !is_string($buildingRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buildingRoom)), __LINE__);
        }
        $this->BuildingRoom = $buildingRoom;
        return $this;
    }
    /**
     * Get PostOfficeBoxNumber value
     * @return string|null
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->PostOfficeBoxNumber;
    }
    /**
     * Set PostOfficeBoxNumber value
     * @param string $postOfficeBoxNumber
     * @return \StructType\AddressBaseType
     */
    public function setPostOfficeBoxNumber($postOfficeBoxNumber = null)
    {
        // validation for constraint: string
        if (!is_null($postOfficeBoxNumber) && !is_string($postOfficeBoxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postOfficeBoxNumber)), __LINE__);
        }
        $this->PostOfficeBoxNumber = $postOfficeBoxNumber;
        return $this;
    }
    /**
     * Get AdditionalAddressLine value
     * @return string|null
     */
    public function getAdditionalAddressLine()
    {
        return $this->AdditionalAddressLine;
    }
    /**
     * Set AdditionalAddressLine value
     * @param string $additionalAddressLine
     * @return \StructType\AddressBaseType
     */
    public function setAdditionalAddressLine($additionalAddressLine = null)
    {
        // validation for constraint: string
        if (!is_null($additionalAddressLine) && !is_string($additionalAddressLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalAddressLine)), __LINE__);
        }
        $this->AdditionalAddressLine = $additionalAddressLine;
        return $this;
    }
    /**
     * Get CityName value
     * @return \StructType\CityNameType|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param \StructType\CityNameType $cityName
     * @return \StructType\AddressBaseType
     */
    public function setCityName(\StructType\CityNameType $cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get County value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $county
     * @return \StructType\AddressBaseType
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        $this->County = $county;
        return $this;
    }
    /**
     * Get CountryName value
     * @return \StructType\CountryNameType|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param \StructType\CountryNameType $countryName
     * @return \StructType\AddressBaseType
     */
    public function setCountryName(\StructType\CountryNameType $countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddressBaseType
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
