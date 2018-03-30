<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferListRS StructType
 * @subpackage Structs
 */
class HolidayHomeOfferListRS extends XmlInterfaceRS
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
     * The OffersSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType
     */
    public $OffersSummary;
    /**
     * The Offers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOffersType
     */
    public $Offers;
    /**
     * The AlternativeOffers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\HolidayHomeOffersType
     */
    public $AlternativeOffers;
    /**
     * Constructor method for HolidayHomeOfferListRS
     * @uses HolidayHomeOfferListRS::setRegion()
     * @uses HolidayHomeOfferListRS::setHolidayHome()
     * @uses HolidayHomeOfferListRS::setOffersSummary()
     * @uses HolidayHomeOfferListRS::setOffers()
     * @uses HolidayHomeOfferListRS::setAlternativeOffers()
     * @param \traveltainment\SOAP17\StructType\RegionType $region
     * @param \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offersSummary
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersType $offers
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersType $alternativeOffers
     */
    public function __construct(\traveltainment\SOAP17\StructType\RegionType $region = null, \traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome = null, \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offersSummary = null, \traveltainment\SOAP17\StructType\HolidayHomeOffersType $offers = null, \traveltainment\SOAP17\StructType\HolidayHomeOffersType $alternativeOffers = null)
    {
        $this
            ->setRegion($region)
            ->setHolidayHome($holidayHome)
            ->setOffersSummary($offersSummary)
            ->setOffers($offers)
            ->setAlternativeOffers($alternativeOffers);
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRS
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
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRS
     */
    public function setHolidayHome(\traveltainment\SOAP17\StructType\HolidayHomeType $holidayHome = null)
    {
        $this->HolidayHome = $holidayHome;
        return $this;
    }
    /**
     * Get OffersSummary value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType|null
     */
    public function getOffersSummary()
    {
        return $this->OffersSummary;
    }
    /**
     * Set OffersSummary value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offersSummary
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRS
     */
    public function setOffersSummary(\traveltainment\SOAP17\StructType\HolidayHomeOffersSummaryType $offersSummary = null)
    {
        $this->OffersSummary = $offersSummary;
        return $this;
    }
    /**
     * Get Offers value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersType|null
     */
    public function getOffers()
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersType $offers
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRS
     */
    public function setOffers(\traveltainment\SOAP17\StructType\HolidayHomeOffersType $offers = null)
    {
        $this->Offers = $offers;
        return $this;
    }
    /**
     * Get AlternativeOffers value
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOffersType|null
     */
    public function getAlternativeOffers()
    {
        return $this->AlternativeOffers;
    }
    /**
     * Set AlternativeOffers value
     * @param \traveltainment\SOAP17\StructType\HolidayHomeOffersType $alternativeOffers
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRS
     */
    public function setAlternativeOffers(\traveltainment\SOAP17\StructType\HolidayHomeOffersType $alternativeOffers = null)
    {
        $this->AlternativeOffers = $alternativeOffers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeOfferListRS
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
