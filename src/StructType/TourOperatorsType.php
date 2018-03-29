<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourOperatorsType StructType
 * @subpackage Structs
 */
class TourOperatorsType extends AbstractStructBase
{
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \StructType\TourOperatorNameType[]
     */
    public $TourOperator;
    /**
     * Constructor method for TourOperatorsType
     * @uses TourOperatorsType::setTourOperator()
     * @param \StructType\TourOperatorNameType[] $tourOperator
     */
    public function __construct(array $tourOperator = array())
    {
        $this
            ->setTourOperator($tourOperator);
    }
    /**
     * Get TourOperator value
     * @return \StructType\TourOperatorNameType[]|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @throws \InvalidArgumentException
     * @param \StructType\TourOperatorNameType[] $tourOperator
     * @return \StructType\TourOperatorsType
     */
    public function setTourOperator(array $tourOperator = array())
    {
        foreach ($tourOperator as $tourOperatorsTypeTourOperatorItem) {
            // validation for constraint: itemType
            if (!$tourOperatorsTypeTourOperatorItem instanceof \StructType\TourOperatorNameType) {
                throw new \InvalidArgumentException(sprintf('The TourOperator property can only contain items of \StructType\TourOperatorNameType, "%s" given', is_object($tourOperatorsTypeTourOperatorItem) ? get_class($tourOperatorsTypeTourOperatorItem) : gettype($tourOperatorsTypeTourOperatorItem)), __LINE__);
            }
        }
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Add item to TourOperator value
     * @throws \InvalidArgumentException
     * @param \StructType\TourOperatorNameType $item
     * @return \StructType\TourOperatorsType
     */
    public function addToTourOperator(\StructType\TourOperatorNameType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TourOperatorNameType) {
            throw new \InvalidArgumentException(sprintf('The TourOperator property can only contain items of \StructType\TourOperatorNameType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TourOperator[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TourOperatorsType
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
