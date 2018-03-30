<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartureListType StructType
 * @subpackage Structs
 */
class DepartureListType extends AbstractStructBase
{
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Departure;
    /**
     * Constructor method for DepartureListType
     * @uses DepartureListType::setDeparture()
     * @param string[] $departure
     */
    public function __construct(array $departure = array())
    {
        $this
            ->setDeparture($departure);
    }
    /**
     * Get Departure value
     * @return string[]|null
     */
    public function getDeparture()
    {
        return $this->Departure;
    }
    /**
     * Set Departure value
     * @throws \InvalidArgumentException
     * @param string[] $departure
     * @return \traveltainment\SOAP17\StructType\DepartureListType
     */
    public function setDeparture(array $departure = array())
    {
        foreach ($departure as $departureListTypeDepartureItem) {
            // validation for constraint: itemType
            if (!is_string($departureListTypeDepartureItem)) {
                throw new \InvalidArgumentException(sprintf('The Departure property can only contain items of string, "%s" given', is_object($departureListTypeDepartureItem) ? get_class($departureListTypeDepartureItem) : gettype($departureListTypeDepartureItem)), __LINE__);
            }
        }
        $this->Departure = $departure;
        return $this;
    }
    /**
     * Add item to Departure value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\DepartureListType
     */
    public function addToDeparture($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Departure property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Departure[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\DepartureListType
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
