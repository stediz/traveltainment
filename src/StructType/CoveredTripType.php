<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveredTripType StructType
 * @subpackage Structs
 */
class CoveredTripType extends AbstractStructBase
{
    /**
     * The Destinations
     * @var \StructType\DestinationsType
     */
    public $Destinations;
    /**
     * The TourOperators
     * @var \StructType\TourOperatorsType
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
     * @param \StructType\DestinationsType $destinations
     * @param \StructType\TourOperatorsType $tourOperators
     * @param string $start
     * @param string $end
     */
    public function __construct(\StructType\DestinationsType $destinations = null, \StructType\TourOperatorsType $tourOperators = null, $start = null, $end = null)
    {
        $this
            ->setDestinations($destinations)
            ->setTourOperators($tourOperators)
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get Destinations value
     * @return \StructType\DestinationsType|null
     */
    public function getDestinations()
    {
        return $this->Destinations;
    }
    /**
     * Set Destinations value
     * @param \StructType\DestinationsType $destinations
     * @return \StructType\CoveredTripType
     */
    public function setDestinations(\StructType\DestinationsType $destinations = null)
    {
        $this->Destinations = $destinations;
        return $this;
    }
    /**
     * Get TourOperators value
     * @return \StructType\TourOperatorsType|null
     */
    public function getTourOperators()
    {
        return $this->TourOperators;
    }
    /**
     * Set TourOperators value
     * @param \StructType\TourOperatorsType $tourOperators
     * @return \StructType\CoveredTripType
     */
    public function setTourOperators(\StructType\TourOperatorsType $tourOperators = null)
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
     * @return \StructType\CoveredTripType
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
     * @return \StructType\CoveredTripType
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
     * @return \StructType\CoveredTripType
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
