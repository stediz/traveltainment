<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonUpdateRQ StructType
 * @subpackage Structs
 */
class AddonUpdateRQ extends XmlInterfaceRQ
{
    /**
     * The AddonInfos
     * @var \StructType\AddonUpdateType
     */
    public $AddonInfos;
    /**
     * The ParamList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExtendedKeyValueListType
     */
    public $ParamList;
    /**
     * Constructor method for AddonUpdateRQ
     * @uses AddonUpdateRQ::setAddonInfos()
     * @uses AddonUpdateRQ::setParamList()
     * @param \StructType\AddonUpdateType $addonInfos
     * @param \StructType\ExtendedKeyValueListType $paramList
     */
    public function __construct(\StructType\AddonUpdateType $addonInfos = null, \StructType\ExtendedKeyValueListType $paramList = null)
    {
        $this
            ->setAddonInfos($addonInfos)
            ->setParamList($paramList);
    }
    /**
     * Get AddonInfos value
     * @return \StructType\AddonUpdateType|null
     */
    public function getAddonInfos()
    {
        return $this->AddonInfos;
    }
    /**
     * Set AddonInfos value
     * @param \StructType\AddonUpdateType $addonInfos
     * @return \StructType\AddonUpdateRQ
     */
    public function setAddonInfos(\StructType\AddonUpdateType $addonInfos = null)
    {
        $this->AddonInfos = $addonInfos;
        return $this;
    }
    /**
     * Get ParamList value
     * @return \StructType\ExtendedKeyValueListType|null
     */
    public function getParamList()
    {
        return $this->ParamList;
    }
    /**
     * Set ParamList value
     * @param \StructType\ExtendedKeyValueListType $paramList
     * @return \StructType\AddonUpdateRQ
     */
    public function setParamList(\StructType\ExtendedKeyValueListType $paramList = null)
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
     * @return \StructType\AddonUpdateRQ
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
