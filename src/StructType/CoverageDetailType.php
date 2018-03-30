<?php

namespace traveltainment\SOAP17\StructType;

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
     * @var \traveltainment\SOAP17\StructType\SimplePriceType
     */
    public $TripCost;
    /**
     * The CoveredTrips
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CoveredTripsType
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
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $tripCost
     * @param \traveltainment\SOAP17\StructType\CoveredTripsType $coveredTrips
     * @param string $effectiveDate
     * @param string $expireDate
     */
    public function __construct(\traveltainment\SOAP17\StructType\SimplePriceType $tripCost = null, \traveltainment\SOAP17\StructType\CoveredTripsType $coveredTrips = null, $effectiveDate = null, $expireDate = null)
    {
        $this
            ->setTripCost($tripCost)
            ->setCoveredTrips($coveredTrips)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate);
    }
    /**
     * Get TripCost value
     * @return \traveltainment\SOAP17\StructType\SimplePriceType|null
     */
    public function getTripCost()
    {
        return $this->TripCost;
    }
    /**
     * Set TripCost value
     * @param \traveltainment\SOAP17\StructType\SimplePriceType $tripCost
     * @return \traveltainment\SOAP17\StructType\CoverageDetailType
     */
    public function setTripCost(\traveltainment\SOAP17\StructType\SimplePriceType $tripCost = null)
    {
        $this->TripCost = $tripCost;
        return $this;
    }
    /**
     * Get CoveredTrips value
     * @return \traveltainment\SOAP17\StructType\CoveredTripsType|null
     */
    public function getCoveredTrips()
    {
        return $this->CoveredTrips;
    }
    /**
     * Set CoveredTrips value
     * @param \traveltainment\SOAP17\StructType\CoveredTripsType $coveredTrips
     * @return \traveltainment\SOAP17\StructType\CoverageDetailType
     */
    public function setCoveredTrips(\traveltainment\SOAP17\StructType\CoveredTripsType $coveredTrips = null)
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
     * @return \traveltainment\SOAP17\StructType\CoverageDetailType
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
     * @return \traveltainment\SOAP17\StructType\CoverageDetailType
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
     * @return \traveltainment\SOAP17\StructType\CoverageDetailType
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
