<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Flags StructType
 * @subpackage Structs
 */
class Flags extends AbstractStructBase
{
    /**
     * The Alternative
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Alternative;
    /**
     * The ChildAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ChildAllowance;
    /**
     * The EarlyBirdOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $EarlyBirdOffer;
    /**
     * Constructor method for Flags
     * @uses Flags::setAlternative()
     * @uses Flags::setChildAllowance()
     * @uses Flags::setEarlyBirdOffer()
     * @param bool $alternative
     * @param bool $childAllowance
     * @param bool $earlyBirdOffer
     */
    public function __construct($alternative = null, $childAllowance = null, $earlyBirdOffer = null)
    {
        $this
            ->setAlternative($alternative)
            ->setChildAllowance($childAllowance)
            ->setEarlyBirdOffer($earlyBirdOffer);
    }
    /**
     * Get Alternative value
     * @return bool|null
     */
    public function getAlternative()
    {
        return $this->Alternative;
    }
    /**
     * Set Alternative value
     * @param bool $alternative
     * @return \traveltainment\SOAP17\StructType\Flags
     */
    public function setAlternative($alternative = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternative) && !is_bool($alternative)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alternative)), __LINE__);
        }
        $this->Alternative = $alternative;
        return $this;
    }
    /**
     * Get ChildAllowance value
     * @return bool|null
     */
    public function getChildAllowance()
    {
        return $this->ChildAllowance;
    }
    /**
     * Set ChildAllowance value
     * @param bool $childAllowance
     * @return \traveltainment\SOAP17\StructType\Flags
     */
    public function setChildAllowance($childAllowance = null)
    {
        // validation for constraint: boolean
        if (!is_null($childAllowance) && !is_bool($childAllowance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($childAllowance)), __LINE__);
        }
        $this->ChildAllowance = $childAllowance;
        return $this;
    }
    /**
     * Get EarlyBirdOffer value
     * @return bool|null
     */
    public function getEarlyBirdOffer()
    {
        return $this->EarlyBirdOffer;
    }
    /**
     * Set EarlyBirdOffer value
     * @param bool $earlyBirdOffer
     * @return \traveltainment\SOAP17\StructType\Flags
     */
    public function setEarlyBirdOffer($earlyBirdOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($earlyBirdOffer) && !is_bool($earlyBirdOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($earlyBirdOffer)), __LINE__);
        }
        $this->EarlyBirdOffer = $earlyBirdOffer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\Flags
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
