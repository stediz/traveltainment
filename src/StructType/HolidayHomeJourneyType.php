<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeJourneyType StructType
 * @subpackage Structs
 */
class HolidayHomeJourneyType extends AbstractStructBase
{
    /**
     * The TravellerList
     * @var \StructType\TravellerListType
     */
    public $TravellerList;
    /**
     * The TravelDateSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravelDateSpanType
     */
    public $TravelDateSpan;
    /**
     * The TravelDurationSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TravelDurationSpanType
     */
    public $TravelDurationSpan;
    /**
     * The ExactTravelDateSpan
     * @var \StructType\TravelDateSpanType
     */
    public $ExactTravelDateSpan;
    /**
     * The PriceSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriceSpanType
     */
    public $PriceSpan;
    /**
     * Constructor method for HolidayHomeJourneyType
     * @uses HolidayHomeJourneyType::setTravellerList()
     * @uses HolidayHomeJourneyType::setTravelDateSpan()
     * @uses HolidayHomeJourneyType::setTravelDurationSpan()
     * @uses HolidayHomeJourneyType::setExactTravelDateSpan()
     * @uses HolidayHomeJourneyType::setPriceSpan()
     * @param \StructType\TravellerListType $travellerList
     * @param \StructType\TravelDateSpanType $travelDateSpan
     * @param \StructType\TravelDurationSpanType $travelDurationSpan
     * @param \StructType\TravelDateSpanType $exactTravelDateSpan
     * @param \StructType\PriceSpanType $priceSpan
     */
    public function __construct(\StructType\TravellerListType $travellerList = null, \StructType\TravelDateSpanType $travelDateSpan = null, \StructType\TravelDurationSpanType $travelDurationSpan = null, \StructType\TravelDateSpanType $exactTravelDateSpan = null, \StructType\PriceSpanType $priceSpan = null)
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
     * @return \StructType\TravellerListType|null
     */
    public function getTravellerList()
    {
        return $this->TravellerList;
    }
    /**
     * Set TravellerList value
     * @param \StructType\TravellerListType $travellerList
     * @return \StructType\HolidayHomeJourneyType
     */
    public function setTravellerList(\StructType\TravellerListType $travellerList = null)
    {
        $this->TravellerList = $travellerList;
        return $this;
    }
    /**
     * Get TravelDateSpan value
     * @return \StructType\TravelDateSpanType|null
     */
    public function getTravelDateSpan()
    {
        return $this->TravelDateSpan;
    }
    /**
     * Set TravelDateSpan value
     * @param \StructType\TravelDateSpanType $travelDateSpan
     * @return \StructType\HolidayHomeJourneyType
     */
    public function setTravelDateSpan(\StructType\TravelDateSpanType $travelDateSpan = null)
    {
        $this->TravelDateSpan = $travelDateSpan;
        return $this;
    }
    /**
     * Get TravelDurationSpan value
     * @return \StructType\TravelDurationSpanType|null
     */
    public function getTravelDurationSpan()
    {
        return $this->TravelDurationSpan;
    }
    /**
     * Set TravelDurationSpan value
     * @param \StructType\TravelDurationSpanType $travelDurationSpan
     * @return \StructType\HolidayHomeJourneyType
     */
    public function setTravelDurationSpan(\StructType\TravelDurationSpanType $travelDurationSpan = null)
    {
        $this->TravelDurationSpan = $travelDurationSpan;
        return $this;
    }
    /**
     * Get ExactTravelDateSpan value
     * @return \StructType\TravelDateSpanType|null
     */
    public function getExactTravelDateSpan()
    {
        return $this->ExactTravelDateSpan;
    }
    /**
     * Set ExactTravelDateSpan value
     * @param \StructType\TravelDateSpanType $exactTravelDateSpan
     * @return \StructType\HolidayHomeJourneyType
     */
    public function setExactTravelDateSpan(\StructType\TravelDateSpanType $exactTravelDateSpan = null)
    {
        $this->ExactTravelDateSpan = $exactTravelDateSpan;
        return $this;
    }
    /**
     * Get PriceSpan value
     * @return \StructType\PriceSpanType|null
     */
    public function getPriceSpan()
    {
        return $this->PriceSpan;
    }
    /**
     * Set PriceSpan value
     * @param \StructType\PriceSpanType $priceSpan
     * @return \StructType\HolidayHomeJourneyType
     */
    public function setPriceSpan(\StructType\PriceSpanType $priceSpan = null)
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
     * @return \StructType\HolidayHomeJourneyType
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
