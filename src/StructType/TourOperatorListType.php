<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourOperatorListType StructType
 * @subpackage Structs
 */
class TourOperatorListType extends AbstractStructBase
{
    /**
     * The TourOperator
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\TourOperatorType[]
     */
    public $TourOperator;
    /**
     * Constructor method for TourOperatorListType
     * @uses TourOperatorListType::setTourOperator()
     * @param \traveltainment\SOAP17\StructType\TourOperatorType[] $tourOperator
     */
    public function __construct(array $tourOperator = array())
    {
        $this
            ->setTourOperator($tourOperator);
    }
    /**
     * Get TourOperator value
     * @return \traveltainment\SOAP17\StructType\TourOperatorType[]|null
     */
    public function getTourOperator()
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TourOperatorType[] $tourOperator
     * @return \traveltainment\SOAP17\StructType\TourOperatorListType
     */
    public function setTourOperator(array $tourOperator = array())
    {
        foreach ($tourOperator as $tourOperatorListTypeTourOperatorItem) {
            // validation for constraint: itemType
            if (!$tourOperatorListTypeTourOperatorItem instanceof \traveltainment\SOAP17\StructType\TourOperatorType) {
                throw new \InvalidArgumentException(sprintf('The TourOperator property can only contain items of \traveltainment\SOAP17\StructType\TourOperatorType, "%s" given', is_object($tourOperatorListTypeTourOperatorItem) ? get_class($tourOperatorListTypeTourOperatorItem) : gettype($tourOperatorListTypeTourOperatorItem)), __LINE__);
            }
        }
        $this->TourOperator = $tourOperator;
        return $this;
    }
    /**
     * Add item to TourOperator value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\TourOperatorType $item
     * @return \traveltainment\SOAP17\StructType\TourOperatorListType
     */
    public function addToTourOperator(\traveltainment\SOAP17\StructType\TourOperatorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\TourOperatorType) {
            throw new \InvalidArgumentException(sprintf('The TourOperator property can only contain items of \traveltainment\SOAP17\StructType\TourOperatorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\TourOperatorListType
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
