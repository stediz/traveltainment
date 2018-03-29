<?php

namespace EnumType;

/**
 * This class stands for HolidayHomeAttributeEnum EnumType
 * @subpackage Enumerations
 */
class HolidayHomeAttributeEnum
{
    /**
     * Constant for value 'Pool'
     * @return string 'Pool'
     */
    const VALUE_POOL = 'Pool';
    /**
     * Constant for value 'Sauna'
     * @return string 'Sauna'
     */
    const VALUE_SAUNA = 'Sauna';
    /**
     * Constant for value 'TV'
     * @return string 'TV'
     */
    const VALUE_TV = 'TV';
    /**
     * Constant for value 'Fireplace'
     * @return string 'Fireplace'
     */
    const VALUE_FIREPLACE = 'Fireplace';
    /**
     * Constant for value 'Fishing'
     * @return string 'Fishing'
     */
    const VALUE_FISHING = 'Fishing';
    /**
     * Constant for value 'PetsAllowed'
     * @return string 'PetsAllowed'
     */
    const VALUE_PETS_ALLOWED = 'PetsAllowed';
    /**
     * Constant for value 'Dishwasher'
     * @return string 'Dishwasher'
     */
    const VALUE_DISHWASHER = 'Dishwasher';
    /**
     * Constant for value 'WashingMachine'
     * @return string 'WashingMachine'
     */
    const VALUE_WASHING_MACHINE = 'WashingMachine';
    /**
     * Constant for value 'Boat'
     * @return string 'Boat'
     */
    const VALUE_BOAT = 'Boat';
    /**
     * Constant for value 'Tennis'
     * @return string 'Tennis'
     */
    const VALUE_TENNIS = 'Tennis';
    /**
     * Constant for value 'Garage'
     * @return string 'Garage'
     */
    const VALUE_GARAGE = 'Garage';
    /**
     * Constant for value 'Cot'
     * @return string 'Cot'
     */
    const VALUE_COT = 'Cot';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_POOL
     * @uses self::VALUE_SAUNA
     * @uses self::VALUE_TV
     * @uses self::VALUE_FIREPLACE
     * @uses self::VALUE_FISHING
     * @uses self::VALUE_PETS_ALLOWED
     * @uses self::VALUE_DISHWASHER
     * @uses self::VALUE_WASHING_MACHINE
     * @uses self::VALUE_BOAT
     * @uses self::VALUE_TENNIS
     * @uses self::VALUE_GARAGE
     * @uses self::VALUE_COT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POOL,
            self::VALUE_SAUNA,
            self::VALUE_TV,
            self::VALUE_FIREPLACE,
            self::VALUE_FISHING,
            self::VALUE_PETS_ALLOWED,
            self::VALUE_DISHWASHER,
            self::VALUE_WASHING_MACHINE,
            self::VALUE_BOAT,
            self::VALUE_TENNIS,
            self::VALUE_GARAGE,
            self::VALUE_COT,
        );
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
