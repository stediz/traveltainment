<?php

namespace StructType;

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
     * The OffersSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeOffersSummaryType
     */
    public $OffersSummary;
    /**
     * The Offers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeOffersType
     */
    public $Offers;
    /**
     * The AlternativeOffers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\HolidayHomeOffersType
     */
    public $AlternativeOffers;
    /**
     * Constructor method for HolidayHomeOfferListRS
     * @uses HolidayHomeOfferListRS::setRegion()
     * @uses HolidayHomeOfferListRS::setHolidayHome()
     * @uses HolidayHomeOfferListRS::setOffersSummary()
     * @uses HolidayHomeOfferListRS::setOffers()
     * @uses HolidayHomeOfferListRS::setAlternativeOffers()
     * @param \StructType\RegionType $region
     * @param \StructType\HolidayHomeType $holidayHome
     * @param \StructType\HolidayHomeOffersSummaryType $offersSummary
     * @param \StructType\HolidayHomeOffersType $offers
     * @param \StructType\HolidayHomeOffersType $alternativeOffers
     */
    public function __construct(\StructType\RegionType $region = null, \StructType\HolidayHomeType $holidayHome = null, \StructType\HolidayHomeOffersSummaryType $offersSummary = null, \StructType\HolidayHomeOffersType $offers = null, \StructType\HolidayHomeOffersType $alternativeOffers = null)
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
     * @return \StructType\RegionType|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param \StructType\RegionType $region
     * @return \StructType\HolidayHomeOfferListRS
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
     * @return \StructType\HolidayHomeOfferListRS
     */
    public function setHolidayHome(\StructType\HolidayHomeType $holidayHome = null)
    {
        $this->HolidayHome = $holidayHome;
        return $this;
    }
    /**
     * Get OffersSummary value
     * @return \StructType\HolidayHomeOffersSummaryType|null
     */
    public function getOffersSummary()
    {
        return $this->OffersSummary;
    }
    /**
     * Set OffersSummary value
     * @param \StructType\HolidayHomeOffersSummaryType $offersSummary
     * @return \StructType\HolidayHomeOfferListRS
     */
    public function setOffersSummary(\StructType\HolidayHomeOffersSummaryType $offersSummary = null)
    {
        $this->OffersSummary = $offersSummary;
        return $this;
    }
    /**
     * Get Offers value
     * @return \StructType\HolidayHomeOffersType|null
     */
    public function getOffers()
    {
        return $this->Offers;
    }
    /**
     * Set Offers value
     * @param \StructType\HolidayHomeOffersType $offers
     * @return \StructType\HolidayHomeOfferListRS
     */
    public function setOffers(\StructType\HolidayHomeOffersType $offers = null)
    {
        $this->Offers = $offers;
        return $this;
    }
    /**
     * Get AlternativeOffers value
     * @return \StructType\HolidayHomeOffersType|null
     */
    public function getAlternativeOffers()
    {
        return $this->AlternativeOffers;
    }
    /**
     * Set AlternativeOffers value
     * @param \StructType\HolidayHomeOffersType $alternativeOffers
     * @return \StructType\HolidayHomeOfferListRS
     */
    public function setAlternativeOffers(\StructType\HolidayHomeOffersType $alternativeOffers = null)
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
     * @return \StructType\HolidayHomeOfferListRS
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
