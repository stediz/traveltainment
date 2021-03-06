<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveredTripsType StructType
 * @subpackage Structs
 */
class CoveredTripsType extends AbstractStructBase
{
    /**
     * The CoveredTrip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \StructType\CoveredTripType[]
     */
    public $CoveredTrip;
    /**
     * Constructor method for CoveredTripsType
     * @uses CoveredTripsType::setCoveredTrip()
     * @param \StructType\CoveredTripType[] $coveredTrip
     */
    public function __construct(array $coveredTrip = array())
    {
        $this
            ->setCoveredTrip($coveredTrip);
    }
    /**
     * Get CoveredTrip value
     * @return \StructType\CoveredTripType[]|null
     */
    public function getCoveredTrip()
    {
        return $this->CoveredTrip;
    }
    /**
     * Set CoveredTrip value
     * @throws \InvalidArgumentException
     * @param \StructType\CoveredTripType[] $coveredTrip
     * @return \StructType\CoveredTripsType
     */
    public function setCoveredTrip(array $coveredTrip = array())
    {
        foreach ($coveredTrip as $coveredTripsTypeCoveredTripItem) {
            // validation for constraint: itemType
            if (!$coveredTripsTypeCoveredTripItem instanceof \StructType\CoveredTripType) {
                throw new \InvalidArgumentException(sprintf('The CoveredTrip property can only contain items of \StructType\CoveredTripType, "%s" given', is_object($coveredTripsTypeCoveredTripItem) ? get_class($coveredTripsTypeCoveredTripItem) : gettype($coveredTripsTypeCoveredTripItem)), __LINE__);
            }
        }
        $this->CoveredTrip = $coveredTrip;
        return $this;
    }
    /**
     * Add item to CoveredTrip value
     * @throws \InvalidArgumentException
     * @param \StructType\CoveredTripType $item
     * @return \StructType\CoveredTripsType
     */
    public function addToCoveredTrip(\StructType\CoveredTripType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CoveredTripType) {
            throw new \InvalidArgumentException(sprintf('The CoveredTrip property can only contain items of \StructType\CoveredTripType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoveredTrip[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CoveredTripsType
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
