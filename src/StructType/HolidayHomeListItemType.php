<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeListItemType StructType
 * @subpackage Structs
 */
class HolidayHomeListItemType extends AbstractStructBase
{
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RegionType
     */
    public $Region;
    /**
     * The HolidayHome
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeType
     */
    public $HolidayHome;
    /**
     * The Offer
     * @var \StructType\HolidayHomeOfferType
     */
    public $Offer;
    /**
     * Constructor method for HolidayHomeListItemType
     * @uses HolidayHomeListItemType::setRegion()
     * @uses HolidayHomeListItemType::setHolidayHome()
     * @uses HolidayHomeListItemType::setOffer()
     * @param \StructType\RegionType $region
     * @param \StructType\HolidayHomeType $holidayHome
     * @param \StructType\HolidayHomeOfferType $offer
     */
    public function __construct(\StructType\RegionType $region = null, \StructType\HolidayHomeType $holidayHome = null, \StructType\HolidayHomeOfferType $offer = null)
    {
        $this
            ->setRegion($region)
            ->setHolidayHome($holidayHome)
            ->setOffer($offer);
    }
    /**
     * Get Region value
     * @return \StructType\RegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \StructType\RegionType $region
     * @return \StructType\HolidayHomeListItemType
     */
    public function setRegion(\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get HolidayHome value
     * @return \StructType\HolidayHomeType|null
     */
    public function getHolidayHome()
    {
        return $this->HolidayHome;
    }
    /**
     * Set HolidayHome value
     * @param \StructType\HolidayHomeType $holidayHome
     * @return \StructType\HolidayHomeListItemType
     */
    public function setHolidayHome(\StructType\HolidayHomeType $holidayHome = null)
    {
        $this->HolidayHome = $holidayHome;
        return $this;
    }
    /**
     * Get Offer value
     * @return \StructType\HolidayHomeOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \StructType\HolidayHomeOfferType $offer
     * @return \StructType\HolidayHomeListItemType
     */
    public function setOffer(\StructType\HolidayHomeOfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeListItemType
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
