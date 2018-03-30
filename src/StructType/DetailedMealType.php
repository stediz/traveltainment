<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailedMealType StructType
 * @subpackage Structs
 */
class DetailedMealType extends AbstractStructBase
{
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Meal;
    /**
     * Constructor method for DetailedMealType
     * @uses DetailedMealType::setMeal()
     * @param string $meal
     */
    public function __construct($meal = null)
    {
        $this
            ->setMeal($meal);
    }
    /**
     * Get Meal value
     * @return string|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @uses \traveltainment\SOAP17\EnumType\Meal::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Meal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $meal
     * @return \traveltainment\SOAP17\StructType\DetailedMealType
     */
    public function setMeal($meal = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Meal::valueIsValid($meal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $meal, implode(', ', \traveltainment\SOAP17\EnumType\Meal::getValidValues())), __LINE__);
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\DetailedMealType
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
