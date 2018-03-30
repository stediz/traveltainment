<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\RegionID
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
     * @var \traveltainment\SOAP17\StructType\HotelReviewRequestType
     */
    public $HotelReview;
    /**
     * The UDFRegions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\UDFRegionsType
     */
    public $UDFRegions;
    /**
     * The DLC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\AirportType
     */
    public $DLC;
    /**
     * The FlightDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\FlightDurationFilterType
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
     * @param \traveltainment\SOAP17\StructType\RegionID $regionID
     * @param string $objectName
     * @param \traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview
     * @param \traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions
     * @param \traveltainment\SOAP17\StructType\AirportType $dLC
     * @param \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration
     */
    public function __construct($offerScope = null, \traveltainment\SOAP17\StructType\RegionID $regionID = null, $objectName = null, \traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview = null, \traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions = null, \traveltainment\SOAP17\StructType\AirportType $dLC = null, \traveltainment\SOAP17\StructType\FlightDurationFilterType $flightDuration = null)
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
     * @uses \traveltainment\SOAP17\EnumType\OfferScopeEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\OfferScopeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerScope
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
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
     * Get RegionID value
     * @return \traveltainment\SOAP17\StructType\RegionID|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param \traveltainment\SOAP17\StructType\RegionID $regionID
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
     */
    public function setRegionID(\traveltainment\SOAP17\StructType\RegionID $regionID = null)
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
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
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
     * @return \traveltainment\SOAP17\StructType\HotelReviewRequestType|null
     */
    public function getHotelReview()
    {
        return $this->HotelReview;
    }
    /**
     * Set HotelReview value
     * @param \traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
     */
    public function setHotelReview(\traveltainment\SOAP17\StructType\HotelReviewRequestType $hotelReview = null)
    {
        $this->HotelReview = $hotelReview;
        return $this;
    }
    /**
     * Get UDFRegions value
     * @return \traveltainment\SOAP17\StructType\UDFRegionsType|null
     */
    public function getUDFRegions()
    {
        return $this->UDFRegions;
    }
    /**
     * Set UDFRegions value
     * @param \traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
     */
    public function setUDFRegions(\traveltainment\SOAP17\StructType\UDFRegionsType $uDFRegions = null)
    {
        $this->UDFRegions = $uDFRegions;
        return $this;
    }
    /**
     * Get DLC value
     * @return \traveltainment\SOAP17\StructType\AirportType|null
     */
    public function getDLC()
    {
        return $this->DLC;
    }
    /**
     * Set DLC value
     * @param \traveltainment\SOAP17\StructType\AirportType $dLC
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
     */
    public function setDLC(\traveltainment\SOAP17\StructType\AirportType $dLC = null)
    {
        $this->DLC = $dLC;
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
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
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
     * @return \traveltainment\SOAP17\StructType\RegionListFilterType
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
