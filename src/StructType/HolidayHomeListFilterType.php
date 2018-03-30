<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeListFilterType StructType
 * @subpackage Structs
 */
class HolidayHomeListFilterType extends AbstractStructBase
{
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The CityID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityID;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectName;
    /**
     * The ObjectCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectCode;
    /**
     * Constructor method for HolidayHomeListFilterType
     * @uses HolidayHomeListFilterType::setCityName()
     * @uses HolidayHomeListFilterType::setCityID()
     * @uses HolidayHomeListFilterType::setObjectName()
     * @uses HolidayHomeListFilterType::setObjectCode()
     * @param string $cityName
     * @param string $cityID
     * @param string $objectName
     * @param string $objectCode
     */
    public function __construct($cityName = null, $cityID = null, $objectName = null, $objectCode = null)
    {
        $this
            ->setCityName($cityName)
            ->setCityID($cityID)
            ->setObjectName($objectName)
            ->setObjectCode($objectCode);
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListFilterType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get CityID value
     * @return string|null
     */
    public function getCityID()
    {
        return $this->CityID;
    }
    /**
     * Set CityID value
     * @param string $cityID
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListFilterType
     */
    public function setCityID($cityID = null)
    {
        // validation for constraint: string
        if (!is_null($cityID) && !is_string($cityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityID)), __LINE__);
        }
        $this->CityID = $cityID;
        return $this;
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListFilterType
     */
    public function setObjectName($objectName = null)
    {
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Get ObjectCode value
     * @return string|null
     */
    public function getObjectCode()
    {
        return $this->ObjectCode;
    }
    /**
     * Set ObjectCode value
     * @param string $objectCode
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListFilterType
     */
    public function setObjectCode($objectCode = null)
    {
        // validation for constraint: string
        if (!is_null($objectCode) && !is_string($objectCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectCode)), __LINE__);
        }
        $this->ObjectCode = $objectCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListFilterType
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
