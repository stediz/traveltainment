<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownstreamProcessType StructType
 * @subpackage Structs
 */
class DownstreamProcessType extends \EnumType\DownstreamProcessDefinitionEnum
{
    /**
     * The isAccepted
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $isAccepted;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for DownstreamProcessType
     * @uses DownstreamProcessType::setIsAccepted()
     * @uses DownstreamProcessType::set_()
     * @param string $isAccepted
     * @param string $_
     */
    public function __construct($isAccepted = null, $_ = null)
    {
        $this
            ->setIsAccepted($isAccepted)
            ->set_($_);
    }
    /**
     * Get isAccepted value
     * @return string
     */
    public function getIsAccepted()
    {
        return $this->isAccepted;
    }
    /**
     * Set isAccepted value
     * @uses \EnumType\DownstreamProcessAcceptedDefinitionEnum::valueIsValid()
     * @uses \EnumType\DownstreamProcessAcceptedDefinitionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $isAccepted
     * @return \StructType\DownstreamProcessType
     */
    public function setIsAccepted($isAccepted = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DownstreamProcessAcceptedDefinitionEnum::valueIsValid($isAccepted)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $isAccepted, implode(', ', \EnumType\DownstreamProcessAcceptedDefinitionEnum::getValidValues())), __LINE__);
        }
        $this->isAccepted = $isAccepted;
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
     * @uses \EnumType\DownstreamProcessDefinitionEnum::valueIsValid()
     * @uses \EnumType\DownstreamProcessDefinitionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $_
     * @return \StructType\DownstreamProcessType
     */
    public function set_($_ = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DownstreamProcessDefinitionEnum::valueIsValid($_)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $_, implode(', ', \EnumType\DownstreamProcessDefinitionEnum::getValidValues())), __LINE__);
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
     * @return \StructType\DownstreamProcessType
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
