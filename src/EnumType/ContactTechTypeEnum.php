<?php

namespace EnumType;

/**
 * This class stands for ContactTechTypeEnum EnumType
 * @subpackage Enumerations
 */
class ContactTechTypeEnum
{
    /**
     * Constant for value 'Voice'
     * @return string 'Voice'
     */
    const VALUE_VOICE = 'Voice';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'Fax'
     * @return string 'Fax'
     */
    const VALUE_FAX = 'Fax';
    /**
     * Constant for value 'Mobile'
     * @return string 'Mobile'
     */
    const VALUE_MOBILE = 'Mobile';
    /**
     * Constant for value 'Webpage'
     * @return string 'Webpage'
     */
    const VALUE_WEBPAGE = 'Webpage';
    /**
     * Constant for value 'SOS'
     * @return string 'SOS'
     */
    const VALUE_SOS = 'SOS';
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
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
     * @uses self::VALUE_VOICE
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_FAX
     * @uses self::VALUE_MOBILE
     * @uses self::VALUE_WEBPAGE
     * @uses self::VALUE_SOS
     * @uses self::VALUE_UNDEFINED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VOICE,
            self::VALUE_EMAIL,
            self::VALUE_FAX,
            self::VALUE_MOBILE,
            self::VALUE_WEBPAGE,
            self::VALUE_SOS,
            self::VALUE_UNDEFINED,
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
