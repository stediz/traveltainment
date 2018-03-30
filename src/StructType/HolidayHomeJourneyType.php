<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeJourneyType StructType
 * @subpackage Structs
 */
class HolidayHomeJourneyType extends AbstractStructBase
{
    /**
     * The TravellerList
     * @var \traveltainment\SOAP17\StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The TravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravelDateSpanType
     */
    public $TravelDateSpan;
    /**
     * The TravelDurationSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TravelDurationSpanType
     */
    public $TravelDurationSpan;
    /**
     * The ExactTravelDateSpan
     * @var \traveltainment\SOAP17\StructType\TravelDateSpanType
     */
    public $ExactTravelDateSpan;
    /**
     * The PriceSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\PriceSpanType
     */
    public $PriceSpan;
    /**
     * Constructor method for HolidayHomeJourneyType
     * @uses HolidayHomeJourneyType::setTravellerList()
     * @uses HolidayHomeJourneyType::setTravelDateSpan()
     * @uses HolidayHomeJourneyType::setTravelDurationSpan()
     * @uses HolidayHomeJourneyType::setExactTravelDateSpan()
     * @uses HolidayHomeJourneyType::setPriceSpan()
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan
     * @param \traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan
     * @param \traveltainment\SOAP17\StructType\PriceSpanType $priceSpan
     */
    public function __construct(\traveltainment\SOAP17\StructType\TravellerListType $travellerList = null, \traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan = null, \traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan = null, \traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan = null, \traveltainment\SOAP17\StructType\PriceSpanType $priceSpan = null)
    {
        $this
            ->setTravellerList($travellerList)
            ->setTravelDateSpan($travelDateSpan)
            ->setTravelDurationSpan($travelDurationSpan)
            ->setExactTravelDateSpan($exactTravelDateSpan)
            ->setPriceSpan($priceSpan);
    }
    /**
     * Get TravellerList value
     * @return \traveltainment\SOAP17\StructType\TravellerListType|null
     */
    public function getTravellerList()
    {
        return $this->TravellerList;
    }
    /**
     * Set TravellerList value
     * @param \traveltainment\SOAP17\StructType\TravellerListType $travellerList
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
     */
    public function setTravellerList(\traveltainment\SOAP17\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get TravelDateSpan value
     * @return \traveltainment\SOAP17\StructType\TravelDateSpanType|null
     */
    public function getTravelDateSpan()
    {
        return $this->TravelDateSpan;
    }
    /**
     * Set TravelDateSpan value
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
     */
    public function setTravelDateSpan(\traveltainment\SOAP17\StructType\TravelDateSpanType $travelDateSpan = null)
    {
        $this->TravelDateSpan = $travelDateSpan;
        return $this;
    }
    /**
     * Get TravelDurationSpan value
     * @return \traveltainment\SOAP17\StructType\TravelDurationSpanType|null
     */
    public function getTravelDurationSpan()
    {
        return $this->TravelDurationSpan;
    }
    /**
     * Set TravelDurationSpan value
     * @param \traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
     */
    public function setTravelDurationSpan(\traveltainment\SOAP17\StructType\TravelDurationSpanType $travelDurationSpan = null)
    {
        $this->TravelDurationSpan = $travelDurationSpan;
        return $this;
    }
    /**
     * Get ExactTravelDateSpan value
     * @return \traveltainment\SOAP17\StructType\TravelDateSpanType|null
     */
    public function getExactTravelDateSpan()
    {
        return $this->ExactTravelDateSpan;
    }
    /**
     * Set ExactTravelDateSpan value
     * @param \traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
     */
    public function setExactTravelDateSpan(\traveltainment\SOAP17\StructType\TravelDateSpanType $exactTravelDateSpan = null)
    {
        $this->ExactTravelDateSpan = $exactTravelDateSpan;
        return $this;
    }
    /**
     * Get PriceSpan value
     * @return \traveltainment\SOAP17\StructType\PriceSpanType|null
     */
    public function getPriceSpan()
    {
        return $this->PriceSpan;
    }
    /**
     * Set PriceSpan value
     * @param \traveltainment\SOAP17\StructType\PriceSpanType $priceSpan
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
     */
    public function setPriceSpan(\traveltainment\SOAP17\StructType\PriceSpanType $priceSpan = null)
    {
        $this->PriceSpan = $priceSpan;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeJourneyType
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
