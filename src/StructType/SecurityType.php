<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityType StructType
 * @subpackage Structs
 */
class SecurityType extends AbstractStructBase
{
    /**
     * The SecurityInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SecurityInfo;
    /**
     * The SecurityShortInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SecurityShortInfo;
    /**
     * Constructor method for SecurityType
     * @uses SecurityType::setSecurityInfo()
     * @uses SecurityType::setSecurityShortInfo()
     * @param string $securityInfo
     * @param string $securityShortInfo
     */
    public function __construct($securityInfo = null, $securityShortInfo = null)
    {
        $this
            ->setSecurityInfo($securityInfo)
            ->setSecurityShortInfo($securityShortInfo);
    }
    /**
     * Get SecurityInfo value
     * @return string|null
     */
    public function getSecurityInfo()
    {
        return $this->SecurityInfo;
    }
    /**
     * Set SecurityInfo value
     * @param string $securityInfo
     * @return \StructType\SecurityType
     */
    public function setSecurityInfo($securityInfo = null)
    {
        // validation for constraint: string
        if (!is_null($securityInfo) && !is_string($securityInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($securityInfo)), __LINE__);
        }
        $this->SecurityInfo = $securityInfo;
        return $this;
    }
    /**
     * Get SecurityShortInfo value
     * @return string|null
     */
    public function getSecurityShortInfo()
    {
        return $this->SecurityShortInfo;
    }
    /**
     * Set SecurityShortInfo value
     * @param string $securityShortInfo
     * @return \StructType\SecurityType
     */
    public function setSecurityShortInfo($securityShortInfo = null)
    {
        // validation for constraint: string
        if (!is_null($securityShortInfo) && !is_string($securityShortInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($securityShortInfo)), __LINE__);
        }
        $this->SecurityShortInfo = $securityShortInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SecurityType
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
