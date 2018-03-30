<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveredTripType StructType
 * @subpackage Structs
 */
class CoveredTripType extends AbstractStructBase
{
    /**
     * The Destinations
     * @var \traveltainment\SOAP17\StructType\DestinationsType
     */
    public $Destinations;
    /**
     * The TourOperators
     * @var \traveltainment\SOAP17\StructType\TourOperatorsType
     */
    public $TourOperators;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * Constructor method for CoveredTripType
     * @uses CoveredTripType::setDestinations()
     * @uses CoveredTripType::setTourOperators()
     * @uses CoveredTripType::setStart()
     * @uses CoveredTripType::setEnd()
     * @param \traveltainment\SOAP17\StructType\DestinationsType $destinations
     * @param \traveltainment\SOAP17\StructType\TourOperatorsType $tourOperators
     * @param string $start
     * @param string $end
     */
    public function __construct(\traveltainment\SOAP17\StructType\DestinationsType $destinations = null, \traveltainment\SOAP17\StructType\TourOperatorsType $tourOperators = null, $start = null, $end = null)
    {
        $this
            ->setDestinations($destinations)
            ->setTourOperators($tourOperators)
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get Destinations value
     * @return \traveltainment\SOAP17\StructType\DestinationsType|null
     */
    public function getDestinations()
    {
        return $this->Destinations;
    }
    /**
     * Set Destinations value
     * @param \traveltainment\SOAP17\StructType\DestinationsType $destinations
     * @return \traveltainment\SOAP17\StructType\CoveredTripType
     */
    public function setDestinations(\traveltainment\SOAP17\StructType\DestinationsType $destinations = null)
    {
        $this->Destinations = $destinations;
        return $this;
    }
    /**
     * Get TourOperators value
     * @return \traveltainment\SOAP17\StructType\TourOperatorsType|null
     */
    public function getTourOperators()
    {
        return $this->TourOperators;
    }
    /**
     * Set TourOperators value
     * @param \traveltainment\SOAP17\StructType\TourOperatorsType $tourOperators
     * @return \traveltainment\SOAP17\StructType\CoveredTripType
     */
    public function setTourOperators(\traveltainment\SOAP17\StructType\TourOperatorsType $tourOperators = null)
    {
        $this->TourOperators = $tourOperators;
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \traveltainment\SOAP17\StructType\CoveredTripType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \traveltainment\SOAP17\StructType\CoveredTripType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CoveredTripType
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
