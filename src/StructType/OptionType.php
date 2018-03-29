<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionType StructType
 * @subpackage Structs
 */
class OptionType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for OptionType
     * @uses OptionType::setType()
     * @uses OptionType::set_()
     * @param string $type
     * @param string $_
     */
    public function __construct($type = null, $_ = null)
    {
        $this
            ->setType($type)
            ->set_($_);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\OptionEnumerationType::valueIsValid()
     * @uses \EnumType\OptionEnumerationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\OptionType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OptionEnumerationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \EnumType\OptionEnumerationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \StructType\OptionType
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
     * @return \StructType\OptionType
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
