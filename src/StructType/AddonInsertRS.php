<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonInsertRS StructType
 * @subpackage Structs
 */
class AddonInsertRS extends XmlInterfaceRS
{
    /**
     * The AddonInformation
     * @var \StructType\AddonInformationType
     */
    public $AddonInformation;
    /**
     * Constructor method for AddonInsertRS
     * @uses AddonInsertRS::setAddonInformation()
     * @param \StructType\AddonInformationType $addonInformation
     */
    public function __construct(\StructType\AddonInformationType $addonInformation = null)
    {
        $this
            ->setAddonInformation($addonInformation);
    }
    /**
     * Get AddonInformation value
     * @return \StructType\AddonInformationType|null
     */
    public function getAddonInformation()
    {
        return $this->AddonInformation;
    }
    /**
     * Set AddonInformation value
     * @param \StructType\AddonInformationType $addonInformation
     * @return \StructType\AddonInsertRS
     */
    public function setAddonInformation(\StructType\AddonInformationType $addonInformation = null)
    {
        $this->AddonInformation = $addonInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddonInsertRS
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
