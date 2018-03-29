<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedKeyValueType StructType
 * Meta informations extracted from the WSDL
 * - maxLength: 16384
 * @subpackage Structs
 */
class ExtendedKeyValueType extends AbstractStructBase
{
    /**
     * The Key
     * Meta informations extracted from the WSDL
     * - use: required
     * - maxLength: 64
     * @var string
     */
    public $Key;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - maxLength: 16384
     * @var string
     */
    public $_;
    /**
     * The UID
     * @var string
     */
    public $UID;
    /**
     * Constructor method for ExtendedKeyValueType
     * @uses ExtendedKeyValueType::setKey()
     * @uses ExtendedKeyValueType::set_()
     * @uses ExtendedKeyValueType::setUID()
     * @param string $key
     * @param string $_
     * @param string $uID
     */
    public function __construct($key = null, $_ = null, $uID = null)
    {
        $this
            ->setKey($key)
            ->set_($_)
            ->setUID($uID);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\ExtendedKeyValueType
     */
    public function setKey($key = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($key) && strlen($key) > 64) || (is_array($key) && count($key) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($key) ? strlen($key) : count($key)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->Key = $key;
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
     * @return \StructType\ExtendedKeyValueType
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($_) && strlen($_) > 16384) || (is_array($_) && count($_) > 16384)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16384 element(s) or a scalar of 16384 character(s) at most, "%d" length given', is_scalar($_) ? strlen($_) : count($_)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get UID value
     * @return string|null
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \StructType\ExtendedKeyValueType
     */
    public function setUID($uID = null)
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ExtendedKeyValueType
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
