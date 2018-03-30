<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\RegionType
     */
    public $Region;
    /**
     * The HolidayHome
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeType
     */
    public $HolidayHome;
    /**
     * The Offer
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOfferType
     */
    public $Offer;
    /**
     * Constructor method for HolidayHomeListItemType
     * @uses HolidayHomeListItemType::setRegion()
     * @uses HolidayHomeListItemType::setHolidayHome()
     * @uses HolidayHomeListItemType::setOffer()
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @param \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionType $region = null, \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome = null, \traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer = null)
    {
        $this
            ->setRegion($region)
            ->setHolidayHome($holidayHome)
            ->setOffer($offer);
    }
    /**
     * Get Region value
     * @return \traveltainment\SOAP17\StructType\RegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListItemType
     */
    public function setRegion(\traveltainment\SOAP17\StructType\RegionType $region = null)
    {
        $this->Region = $region;
        return $this;
    }
    /**
     * Get HolidayHome value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeType|null
     */
    public function getHolidayHome()
    {
        return $this->HolidayHome;
    }
    /**
     * Set HolidayHome value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListItemType
     */
    public function setHolidayHome(\traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome = null)
    {
        $this->HolidayHome = $holidayHome;
        return $this;
    }
    /**
     * Get Offer value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListItemType
     */
    public function setOffer(\traveltainment\SOAP17\StructType\HolidayHomeOfferType $offer = null)
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeListItemType
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
