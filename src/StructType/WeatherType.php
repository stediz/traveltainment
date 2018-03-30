<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeatherType StructType
 * @subpackage Structs
 */
class WeatherType extends AbstractStructBase
{
    /**
     * The ClimaData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ClimaDataType
     */
    public $ClimaData;
    /**
     * Constructor method for WeatherType
     * @uses WeatherType::setClimaData()
     * @param \traveltainment\SOAP17\StructType\ClimaDataType $climaData
     */
    public function __construct(\traveltainment\SOAP17\StructType\ClimaDataType $climaData = null)
    {
        $this
            ->setClimaData($climaData);
    }
    /**
     * Get ClimaData value
     * @return \traveltainment\SOAP17\StructType\ClimaDataType|null
     */
    public function getClimaData()
    {
        return $this->ClimaData;
    }
    /**
     * Set ClimaData value
     * @param \traveltainment\SOAP17\StructType\ClimaDataType $climaData
     * @return \traveltainment\SOAP17\StructType\WeatherType
     */
    public function setClimaData(\traveltainment\SOAP17\StructType\ClimaDataType $climaData = null)
    {
        $this->ClimaData = $climaData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\WeatherType
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
