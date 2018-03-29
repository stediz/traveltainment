<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionListFilterType StructType
 * @subpackage Structs
 */
class RegionListFilterType extends AbstractStructBase
{
    /**
     * The OfferScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferScope;
    /**
     * The RegionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionID
     */
    public $RegionID;
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ObjectName;
    /**
     * The HotelReview
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HotelReviewRequestType
     */
    public $HotelReview;
    /**
     * The UDFRegions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\UDFRegionsType
     */
    public $UDFRegions;
    /**
     * The DLC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AirportType
     */
    public $DLC;
    /**
     * The FlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\FlightDurationFilterType
     */
    public $FlightDuration;
    /**
     * Constructor method for RegionListFilterType
     * @uses RegionListFilterType::setOfferScope()
     * @uses RegionListFilterType::setRegionID()
     * @uses RegionListFilterType::setObjectName()
     * @uses RegionListFilterType::setHotelReview()
     * @uses RegionListFilterType::setUDFRegions()
     * @uses RegionListFilterType::setDLC()
     * @uses RegionListFilterType::setFlightDuration()
     * @param string $offerScope
     * @param \StructType\RegionID $regionID
     * @param string $objectName
     * @param \StructType\HotelReviewRequestType $hotelReview
     * @param \StructType\UDFRegionsType $uDFRegions
     * @param \StructType\AirportType $dLC
     * @param \StructType\FlightDurationFilterType $flightDuration
     */
    public function __construct($offerScope = null, \StructType\RegionID $regionID = null, $objectName = null, \StructType\HotelReviewRequestType $hotelReview = null, \StructType\UDFRegionsType $uDFRegions = null, \StructType\AirportType $dLC = null, \StructType\FlightDurationFilterType $flightDuration = null)
    {
        $this
            ->setOfferScope($offerScope)
            ->setRegionID($regionID)
            ->setObjectName($objectName)
            ->setHotelReview($hotelReview)
            ->setUDFRegions($uDFRegions)
            ->setDLC($dLC)
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
     * @return \StructType\RegionListFilterType
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
     * Get RegionID value
     * @return \StructType\RegionID|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param \StructType\RegionID $regionID
     * @return \StructType\RegionListFilterType
     */
    public function setRegionID(\StructType\RegionID $regionID = null)
    {
        $this->RegionID = $regionID;
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
     * @return \StructType\RegionListFilterType
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
     * Get HotelReview value
     * @return \StructType\HotelReviewRequestType|null
     */
    public function getHotelReview()
    {
        return $this->HotelReview;
    }
    /**
     * Set HotelReview value
     * @param \StructType\HotelReviewRequestType $hotelReview
     * @return \StructType\RegionListFilterType
     */
    public function setHotelReview(\StructType\HotelReviewRequestType $hotelReview = null)
    {
        $this->HotelReview = $hotelReview;
        return $this;
    }
    /**
     * Get UDFRegions value
     * @return \StructType\UDFRegionsType|null
     */
    public function getUDFRegions()
    {
        return $this->UDFRegions;
    }
    /**
     * Set UDFRegions value
     * @param \StructType\UDFRegionsType $uDFRegions
     * @return \StructType\RegionListFilterType
     */
    public function setUDFRegions(\StructType\UDFRegionsType $uDFRegions = null)
    {
        $this->UDFRegions = $uDFRegions;
        return $this;
    }
    /**
     * Get DLC value
     * @return \StructType\AirportType|null
     */
    public function getDLC()
    {
        return $this->DLC;
    }
    /**
     * Set DLC value
     * @param \StructType\AirportType $dLC
     * @return \StructType\RegionListFilterType
     */
    public function setDLC(\StructType\AirportType $dLC = null)
    {
        $this->DLC = $dLC;
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
     * @return \StructType\RegionListFilterType
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
     * @return \StructType\RegionListFilterType
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
