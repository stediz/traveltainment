<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeReducedOfferType StructType
 * @subpackage Structs
 */
class HolidayHomeReducedOfferType extends AbstractStructBase
{
    /**
     * The OfferID
     * @var string
     */
    public $OfferID;
    /**
     * The Alternative
     * @var bool
     */
    public $Alternative;
    /**
     * The PriceInformation
     * @var \traveltainment\SOAP17\StructType\PriceInformationType
     */
    public $PriceInformation;
    /**
     * The StayDuration
     * @var int
     */
    public $StayDuration;
    /**
     * The TourOperator
     * @var \traveltainment\SOAP17\StructType\ReducedTourOperatorType
     */
    public $TourOperator;
    /**
     * Constructor method for HolidayHomeReducedOfferType
     * @uses HolidayHomeReducedOfferType::setOfferID()
     * @uses HolidayHomeReducedOfferType::setAlternative()
     * @uses HolidayHomeReducedOfferType::setPriceInformation()
     * @uses HolidayHomeReducedOfferType::setStayDuration()
     * @uses HolidayHomeReducedOfferType::setTourOperator()
     * @param string $offerID
     * @param bool $alternative
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @param int $stayDuration
     * @param \traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator
     */
    public function __construct($offerID = null, $alternative = null, \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null, $stayDuration = null, \traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator = null)
    {
        $this
            ->setOfferID($offerID)
            ->setAlternative($alternative)
            ->setPriceInformation($priceInformation)
            ->setStayDuration($stayDuration)
            ->setTourOperator($tourOperator);
    }
    /**
     * Get OfferID value
     * @return string|null
     */
    public function getOfferID()
    {
        return $this->OfferID;
    }
    /**
     * Set OfferID value
     * @param string $offerID
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
     */
    public function setOfferID($offerID = null)
    {
        // validation for constraint: string
        if (!is_null($offerID) && !is_string($offerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerID)), __LINE__);
        }
        $this->OfferID = $offerID;
        return $this;
    }
    /**
     * Get Alternative value
     * @return bool|null
     */
    public function getAlternative()
    {
        return $this->Alternative;
    }
    /**
     * Set Alternative value
     * @param bool $alternative
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
     */
    public function setAlternative($alternative = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternative) && !is_bool($alternative)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alternative)), __LINE__);
        }
        $this->Alternative = $alternative;
        return $this;
    }
    /**
     * Get PriceInformation value
     * @return \traveltainment\SOAP17\StructType\PriceInformationType|null
     */
    public function getPriceInformation()
    {
        return $this->PriceInformation;
    }
    /**
     * Set PriceInformation value
     * @param \traveltainment\SOAP17\StructType\PriceInformationType $priceInformation
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
     */
    public function setPriceInformation(\traveltainment\SOAP17\StructType\PriceInformationType $priceInformation = null)
    {
        $this->PriceInformation = $priceInformation;
        return $this;
    }
    /**
     * Get StayDuration value
     * @return int|null
     */
    public function getStayDuration()
    {
        return $this->StayDuration;
    }
    /**
     * Set StayDuration value
     * @param int $stayDuration
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
     */
    public function setStayDuration($stayDuration = null)
    {
        // validation for constraint: int
        if (!is_null($stayDuration) && !is_numeric($stayDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stayDuration)), __LINE__);
        }
        $this->StayDuration = $stayDuration;
        return $this;
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\ReducedTourOperatorType|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param \traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
     */
    public function setTourOperator(\traveltainment\SOAP17\StructType\ReducedTourOperatorType $tourOperator = null)
    {
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\HolidayHomeReducedOfferType
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
