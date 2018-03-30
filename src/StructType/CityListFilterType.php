<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityListFilterType StructType
 * @subpackage Structs
 */
class CityListFilterType extends AbstractStructBase
{
    /**
     * The OfferScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferScope;
    /**
     * The CityIDList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CityIDList
     */
    public $CityIDList;
    /**
     * The FlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\FlightDurationFilterType
     */
    public $FlightDuration;
    /**
     * Constructor method for CityListFilterType
     * @uses CityListFilterType::setOfferScope()
     * @uses CityListFilterType::setCityIDList()
     * @uses CityListFilterType::setFlightDuration()
     * @param string $offerScope
     * @param \traveltainment\SOAP17\StructType\CityIDList $cityIDList
     * @param \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration
     */
    public function __construct($offerScope = null, \traveltainment\SOAP17\StructType\CityIDList $cityIDList = null, \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration = null)
    {
        $this
            ->setOfferScope($offerScope)
            ->setCityIDList($cityIDList)
            ->setFlightDuration($flightDuration);
    }
    /**
     * Get OfferScope value
     * @return string|null
     */
    public function getOfferScope()
    {
        return $this->OfferScope;
    }
    /**
     * Set OfferScope value
     * @uses \traveltainment\SOAP17\EnumType\OfferScopeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OfferScopeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerScope
     * @return \traveltainment\SOAP17\StructType\CityListFilterType
     */
    public function setOfferScope($offerScope = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\OfferScopeEnum::valueIsValid($offerScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $offerScope, implode(', ', \traveltainment\SOAP17\EnumType\OfferScopeEnum::getValidValues())), __LINE__);
        }
        $this->OfferScope = $offerScope;
        return $this;
    }
    /**
     * Get CityIDList value
     * @return \traveltainment\SOAP17\StructType\CityIDList|null
     */
    public function getCityIDList()
    {
        return $this->CityIDList;
    }
    /**
     * Set CityIDList value
     * @param \traveltainment\SOAP17\StructType\CityIDList $cityIDList
     * @return \traveltainment\SOAP17\StructType\CityListFilterType
     */
    public function setCityIDList(\traveltainment\SOAP17\StructType\CityIDList $cityIDList = null)
    {
        $this->CityIDList = $cityIDList;
        return $this;
    }
    /**
     * Get FlightDuration value
     * @return \traveltainment\SOAP17\StructType\FlightDurationFilterType|null
     */
    public function getFlightDuration()
    {
        return $this->FlightDuration;
    }
    /**
     * Set FlightDuration value
     * @param \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration
     * @return \traveltainment\SOAP17\StructType\CityListFilterType
     */
    public function setFlightDuration(\traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration = null)
    {
        $this->FlightDuration = $flightDuration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CityListFilterType
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
