<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonListInsertRQ StructType
 * @subpackage Structs
 */
class AddonListInsertRQ extends XmlInterfaceRQ
{
    /**
     * The AddonListInsert
     * @var \traveltainment\SOAP17\StructType\AddonListInsertType
     */
    public $AddonListInsert;
    /**
     * Constructor method for AddonListInsertRQ
     * @uses AddonListInsertRQ::setAddonListInsert()
     * @param \traveltainment\SOAP17\StructType\AddonListInsertType $addonListInsert
     */
    public function __construct(\traveltainment\SOAP17\StructType\AddonListInsertType $addonListInsert = null)
    {
        $this
            ->setAddonListInsert($addonListInsert);
    }
    /**
     * Get AddonListInsert value
     * @return \traveltainment\SOAP17\StructType\AddonListInsertType|null
     */
    public function getAddonListInsert()
    {
        return $this->AddonListInsert;
    }
    /**
     * Set AddonListInsert value
     * @param \traveltainment\SOAP17\StructType\AddonListInsertType $addonListInsert
     * @return \traveltainment\SOAP17\StructType\AddonListInsertRQ
     */
    public function setAddonListInsert(\traveltainment\SOAP17\StructType\AddonListInsertType $addonListInsert = null)
    {
        $this->AddonListInsert = $addonListInsert;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonListInsertRQ
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
