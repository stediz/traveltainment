<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParamType StructType
 * @subpackage Structs
 */
class ParamType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Key
     * @var string
     */
    public $Key;
    /**
     * Constructor method for ParamType
     * @uses ParamType::set_()
     * @uses ParamType::setKey()
     * @param string $_
     * @param string $key
     */
    public function __construct($_ = null, $key = null)
    {
        $this
            ->set_($_)
            ->setKey($key);
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
     * @return \StructType\ParamType
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
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\ParamType
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParamType
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
