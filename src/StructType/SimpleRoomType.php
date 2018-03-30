<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleRoomType StructType
 * @subpackage Structs
 */
class SimpleRoomType extends \traveltainment\SOAP17\EnumType\Room
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * Constructor method for SimpleRoomType
     * @uses SimpleRoomType::set_()
     * @uses SimpleRoomType::setName()
     * @param string $_
     * @param string $name
     */
    public function __construct($_ = null, $name = null)
    {
        $this
            ->set_($_)
            ->setName($name);
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
     * @uses \traveltainment\SOAP17\EnumType\Room::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Room::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \traveltainment\SOAP17\StructType\SimpleRoomType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Room::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \traveltainment\SOAP17\EnumType\Room::getValidValues())), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \traveltainment\SOAP17\StructType\SimpleRoomType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\SimpleRoomType
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
