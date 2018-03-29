<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTermsAndConditionsRS StructType
 * @subpackage Structs
 */
class GetTermsAndConditionsRS extends XmlInterfaceRS
{
    /**
     * The TermsAndConditions
     * @var \StructType\TermsAndConditions
     */
    public $TermsAndConditions;
    /**
     * Constructor method for GetTermsAndConditionsRS
     * @uses GetTermsAndConditionsRS::setTermsAndConditions()
     * @param \StructType\TermsAndConditions $termsAndConditions
     */
    public function __construct(\StructType\TermsAndConditions $termsAndConditions = null)
    {
        $this
            ->setTermsAndConditions($termsAndConditions);
    }
    /**
     * Get TermsAndConditions value
     * @return \StructType\TermsAndConditions|null
     */
    public function getTermsAndConditions()
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param \StructType\TermsAndConditions $termsAndConditions
     * @return \StructType\GetTermsAndConditionsRS
     */
    public function setTermsAndConditions(\StructType\TermsAndConditions $termsAndConditions = null)
    {
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTermsAndConditionsRS
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
