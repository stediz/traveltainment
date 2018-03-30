<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonListInsertRS StructType
 * @subpackage Structs
 */
class AddonListInsertRS extends XmlInterfaceRS
{
    /**
     * The AddonInformationList
     * @var \traveltainment\SOAP17\StructType\AddonInformationListType
     */
    public $AddonInformationList;
    /**
     * Constructor method for AddonListInsertRS
     * @uses AddonListInsertRS::setAddonInformationList()
     * @param \traveltainment\SOAP17\StructType\AddonInformationListType $addonInformationList
     */
    public function __construct(\traveltainment\SOAP17\StructType\AddonInformationListType $addonInformationList = null)
    {
        $this
            ->setAddonInformationList($addonInformationList);
    }
    /**
     * Get AddonInformationList value
     * @return \traveltainment\SOAP17\StructType\AddonInformationListType|null
     */
    public function getAddonInformationList()
    {
        return $this->AddonInformationList;
    }
    /**
     * Set AddonInformationList value
     * @param \traveltainment\SOAP17\StructType\AddonInformationListType $addonInformationList
     * @return \traveltainment\SOAP17\StructType\AddonListInsertRS
     */
    public function setAddonInformationList(\traveltainment\SOAP17\StructType\AddonInformationListType $addonInformationList = null)
    {
        $this->AddonInformationList = $addonInformationList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonListInsertRS
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
