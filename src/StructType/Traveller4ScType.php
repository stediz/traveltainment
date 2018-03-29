<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Traveller4ScType StructType
 * @subpackage Structs
 */
class Traveller4ScType extends TravellerType
{
    /**
     * The RussianMarketScoped
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RussianMarketScopedType
     */
    public $RussianMarketScoped;
    /**
     * Constructor method for Traveller4ScType
     * @uses Traveller4ScType::setRussianMarketScoped()
     * @param \StructType\RussianMarketScopedType $russianMarketScoped
     */
    public function __construct(\StructType\RussianMarketScopedType $russianMarketScoped = null)
    {
        $this
            ->setRussianMarketScoped($russianMarketScoped);
    }
    /**
     * Get RussianMarketScoped value
     * @return \StructType\RussianMarketScopedType|null
     */
    public function getRussianMarketScoped()
    {
        return $this->RussianMarketScoped;
    }
    /**
     * Set RussianMarketScoped value
     * @param \StructType\RussianMarketScopedType $russianMarketScoped
     * @return \StructType\Traveller4ScType
     */
    public function setRussianMarketScoped(\StructType\RussianMarketScopedType $russianMarketScoped = null)
    {
        $this->RussianMarketScoped = $russianMarketScoped;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Traveller4ScType
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
