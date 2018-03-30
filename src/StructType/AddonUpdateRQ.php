<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonUpdateRQ StructType
 * @subpackage Structs
 */
class AddonUpdateRQ extends XmlInterfaceRQ
{
    /**
     * The AddonInfos
     * @var \traveltainment\SOAP17\StructType\AddonUpdateType
     */
    public $AddonInfos;
    /**
     * The ParamList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ExtendedKeyValueListType
     */
    public $ParamList;
    /**
     * Constructor method for AddonUpdateRQ
     * @uses AddonUpdateRQ::setAddonInfos()
     * @uses AddonUpdateRQ::setParamList()
     * @param \traveltainment\SOAP17\StructType\AddonUpdateType $addonInfos
     * @param \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList
     */
    public function __construct(\traveltainment\SOAP17\StructType\AddonUpdateType $addonInfos = null, \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList = null)
    {
        $this
            ->setAddonInfos($addonInfos)
            ->setParamList($paramList);
    }
    /**
     * Get AddonInfos value
     * @return \traveltainment\SOAP17\StructType\AddonUpdateType|null
     */
    public function getAddonInfos()
    {
        return $this->AddonInfos;
    }
    /**
     * Set AddonInfos value
     * @param \traveltainment\SOAP17\StructType\AddonUpdateType $addonInfos
     * @return \traveltainment\SOAP17\StructType\AddonUpdateRQ
     */
    public function setAddonInfos(\traveltainment\SOAP17\StructType\AddonUpdateType $addonInfos = null)
    {
        $this->AddonInfos = $addonInfos;
        return $this;
    }
    /**
     * Get ParamList value
     * @return \traveltainment\SOAP17\StructType\ExtendedKeyValueListType|null
     */
    public function getParamList()
    {
        return $this->ParamList;
    }
    /**
     * Set ParamList value
     * @param \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList
     * @return \traveltainment\SOAP17\StructType\AddonUpdateRQ
     */
    public function setParamList(\traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList = null)
    {
        $this->ParamList = $paramList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AddonUpdateRQ
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
