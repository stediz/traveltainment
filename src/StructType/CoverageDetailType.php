<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageDetailType StructType
 * @subpackage Structs
 */
class CoverageDetailType extends AbstractStructBase
{
    /**
     * The TripCost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SimplePriceType
     */
    public $TripCost;
    /**
     * The CoveredTrips
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CoveredTripsType
     */
    public $CoveredTrips;
    /**
     * The EffectiveDate
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpireDate
     * @var string
     */
    public $ExpireDate;
    /**
     * Constructor method for CoverageDetailType
     * @uses CoverageDetailType::setTripCost()
     * @uses CoverageDetailType::setCoveredTrips()
     * @uses CoverageDetailType::setEffectiveDate()
     * @uses CoverageDetailType::setExpireDate()
     * @param \StructType\SimplePriceType $tripCost
     * @param \StructType\CoveredTripsType $coveredTrips
     * @param string $effectiveDate
     * @param string $expireDate
     */
    public function __construct(\StructType\SimplePriceType $tripCost = null, \StructType\CoveredTripsType $coveredTrips = null, $effectiveDate = null, $expireDate = null)
    {
        $this
            ->setTripCost($tripCost)
            ->setCoveredTrips($coveredTrips)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate);
    }
    /**
     * Get TripCost value
     * @return \StructType\SimplePriceType|null
     */
    public function getTripCost()
    {
        return $this->TripCost;
    }
    /**
     * Set TripCost value
     * @param \StructType\SimplePriceType $tripCost
     * @return \StructType\CoverageDetailType
     */
    public function setTripCost(\StructType\SimplePriceType $tripCost = null)
    {
        $this->TripCost = $tripCost;
        return $this;
    }
    /**
     * Get CoveredTrips value
     * @return \StructType\CoveredTripsType|null
     */
    public function getCoveredTrips()
    {
        return $this->CoveredTrips;
    }
    /**
     * Set CoveredTrips value
     * @param \StructType\CoveredTripsType $coveredTrips
     * @return \StructType\CoverageDetailType
     */
    public function setCoveredTrips(\StructType\CoveredTripsType $coveredTrips = null)
    {
        $this->CoveredTrips = $coveredTrips;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \StructType\CoverageDetailType
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \StructType\CoverageDetailType
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CoverageDetailType
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
