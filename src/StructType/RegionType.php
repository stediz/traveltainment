<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionType StructType
 * @subpackage Structs
 */
class RegionType extends AbstractStructBase
{
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Region;
    /**
     * The RegionRefID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegionRefID;
    /**
     * The DestinationID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DestinationID;
    /**
     * The TopRegionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TopRegionID;
    /**
     * The DestinationAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationAirport;
    /**
     * The WeatherForRegion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\WeatherType
     */
    public $WeatherForRegion;
    /**
     * Constructor method for RegionType
     * @uses RegionType::setCountry()
     * @uses RegionType::setRegion()
     * @uses RegionType::setRegionRefID()
     * @uses RegionType::setDestinationID()
     * @uses RegionType::setTopRegionID()
     * @uses RegionType::setDestinationAirport()
     * @uses RegionType::setWeatherForRegion()
     * @param string $country
     * @param string $region
     * @param string $regionRefID
     * @param int $destinationID
     * @param int $topRegionID
     * @param string $destinationAirport
     * @param \traveltainment\SOAP17\StructType\WeatherType $weatherForRegion
     */
    public function __construct($country = null, $region = null, $regionRefID = null, $destinationID = null, $topRegionID = null, $destinationAirport = null, \traveltainment\SOAP17\StructType\WeatherType $weatherForRegion = null)
    {
        $this
            ->setCountry($country)
            ->setRegion($region)
            ->setRegionRefID($regionRefID)
            ->setDestinationID($destinationID)
            ->setTopRegionID($topRegionID)
            ->setDestinationAirport($destinationAirport)
            ->setWeatherForRegion($weatherForRegion);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param string $region
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Get RegionRefID value
     * @return string|null
     */
    public function getRegionRefID()
    {
        return $this->RegionRefID;
    }
    /**
     * Set RegionRefID value
     * @param string $regionRefID
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setRegionRefID($regionRefID = null)
    {
        // validation for constraint: string
        if (!is_null($regionRefID) && !is_string($regionRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionRefID)), __LINE__);
        }
        $this->RegionRefID = $regionRefID;
        return $this;
    }
    /**
     * Get DestinationID value
     * @return int|null
     */
    public function getDestinationID()
    {
        return $this->DestinationID;
    }
    /**
     * Set DestinationID value
     * @param int $destinationID
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setDestinationID($destinationID = null)
    {
        // validation for constraint: int
        if (!is_null($destinationID) && !is_numeric($destinationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($destinationID)), __LINE__);
        }
        $this->DestinationID = $destinationID;
        return $this;
    }
    /**
     * Get TopRegionID value
     * @return int|null
     */
    public function getTopRegionID()
    {
        return $this->TopRegionID;
    }
    /**
     * Set TopRegionID value
     * @param int $topRegionID
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setTopRegionID($topRegionID = null)
    {
        // validation for constraint: int
        if (!is_null($topRegionID) && !is_numeric($topRegionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($topRegionID)), __LINE__);
        }
        $this->TopRegionID = $topRegionID;
        return $this;
    }
    /**
     * Get DestinationAirport value
     * @return string|null
     */
    public function getDestinationAirport()
    {
        return $this->DestinationAirport;
    }
    /**
     * Set DestinationAirport value
     * @param string $destinationAirport
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setDestinationAirport($destinationAirport = null)
    {
        // validation for constraint: string
        if (!is_null($destinationAirport) && !is_string($destinationAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationAirport)), __LINE__);
        }
        $this->DestinationAirport = $destinationAirport;
        return $this;
    }
    /**
     * Get WeatherForRegion value
     * @return \traveltainment\SOAP17\StructType\WeatherType|null
     */
    public function getWeatherForRegion()
    {
        return $this->WeatherForRegion;
    }
    /**
     * Set WeatherForRegion value
     * @param \traveltainment\SOAP17\StructType\WeatherType $weatherForRegion
     * @return \traveltainment\SOAP17\StructType\RegionType
     */
    public function setWeatherForRegion(\traveltainment\SOAP17\StructType\WeatherType $weatherForRegion = null)
    {
        $this->WeatherForRegion = $weatherForRegion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RegionType
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
