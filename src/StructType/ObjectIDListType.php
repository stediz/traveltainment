<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjectIDListType StructType
 * Meta informations extracted from the WSDL
 * - maxLength: 200
 * - minLength: 1
 * @subpackage Structs
 */
class ObjectIDListType extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - maxLength: 200
     * - minLength: 1
     * @var int
     */
    public $_;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * Constructor method for ObjectIDListType
     * @uses ObjectIDListType::set_()
     * @uses ObjectIDListType::setType()
     * @param int $_
     * @param string $type
     */
    public function __construct($_ = null, $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \traveltainment\SOAP17\StructType\ObjectIDListType
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($_) && strlen($_) > 200) || (is_array($_) && count($_) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 200 element(s) or a scalar of 200 character(s) at most, "%d" length given', is_scalar($_) ? strlen($_) : count($_)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($_) && strlen($_) < 1) || (is_array($_) && count($_) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: int
        if (!is_null($_) && !is_numeric($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \traveltainment\SOAP17\EnumType\ObjectIDEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\ObjectIDEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \traveltainment\SOAP17\StructType\ObjectIDListType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\ObjectIDEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \traveltainment\SOAP17\EnumType\ObjectIDEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\ObjectIDListType
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
