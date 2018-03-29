<?php

namespace StructType;

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
     * @var \StructType\CityIDList
     */
    public $CityIDList;
    /**
     * The FlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\FlightDurationFilterType
     */
    public $FlightDuration;
    /**
     * Constructor method for CityListFilterType
     * @uses CityListFilterType::setOfferScope()
     * @uses CityListFilterType::setCityIDList()
     * @uses CityListFilterType::setFlightDuration()
     * @param string $offerScope
     * @param \StructType\CityIDList $cityIDList
     * @param \StructType\FlightDurationFilterType $flightDuration
     */
    public function __construct($offerScope = null, \StructType\CityIDList $cityIDList = null, \StructType\FlightDurationFilterType $flightDuration = null)
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
     * @uses \EnumType\OfferScopeEnum::valueIsValid()
     * @uses \EnumType\OfferScopeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerScope
     * @return \StructType\CityListFilterType
     */
    public function setOfferScope($offerScope = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OfferScopeEnum::valueIsValid($offerScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $offerScope, implode(', ', \EnumType\OfferScopeEnum::getValidValues())), __LINE__);
        }
        $this->OfferScope = $offerScope;
        return $this;
    }
    /**
     * Get CityIDList value
     * @return \StructType\CityIDList|null
     */
    public function getCityIDList()
    {
        return $this->CityIDList;
    }
    /**
     * Set CityIDList value
     * @param \StructType\CityIDList $cityIDList
     * @return \StructType\CityListFilterType
     */
    public function setCityIDList(\StructType\CityIDList $cityIDList = null)
    {
        $this->CityIDList = $cityIDList;
        return $this;
    }
    /**
     * Get FlightDuration value
     * @return \StructType\FlightDurationFilterType|null
     */
    public function getFlightDuration()
    {
        return $this->FlightDuration;
    }
    /**
     * Set FlightDuration value
     * @param \StructType\FlightDurationFilterType $flightDuration
     * @return \StructType\CityListFilterType
     */
    public function setFlightDuration(\StructType\FlightDurationFilterType $flightDuration = null)
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
     * @return \StructType\CityListFilterType
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
