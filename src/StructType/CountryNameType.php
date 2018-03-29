<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryNameType StructType
 * @subpackage Structs
 */
class CountryNameType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Code;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for CountryNameType
     * @uses CountryNameType::setCode()
     * @uses CountryNameType::set_()
     * @param string $code
     * @param string $_
     */
    public function __construct($code = null, $_ = null)
    {
        $this
            ->setCode($code)
            ->set_($_);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @uses \EnumType\CountryCodeType::valueIsValid()
     * @uses \EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $code
     * @return \StructType\CountryNameType
     */
    public function setCode($code = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CountryCodeType::valueIsValid($code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $code, implode(', ', \EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\CountryNameType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CountryNameType
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
