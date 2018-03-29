<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddInfosType StructType
 * @subpackage Structs
 */
class AddInfosType extends AbstractStructBase
{
    /**
     * The AddInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\AddInfoType[]
     */
    public $AddInfo;
    /**
     * Constructor method for AddInfosType
     * @uses AddInfosType::setAddInfo()
     * @param \StructType\AddInfoType[] $addInfo
     */
    public function __construct(array $addInfo = array())
    {
        $this
            ->setAddInfo($addInfo);
    }
    /**
     * Get AddInfo value
     * @return \StructType\AddInfoType[]
     */
    public function getAddInfo()
    {
        return $this->AddInfo;
    }
    /**
     * Set AddInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\AddInfoType[] $addInfo
     * @return \StructType\AddInfosType
     */
    public function setAddInfo(array $addInfo = array())
    {
        foreach ($addInfo as $addInfosTypeAddInfoItem) {
            // validation for constraint: itemType
            if (!$addInfosTypeAddInfoItem instanceof \StructType\AddInfoType) {
                throw new \InvalidArgumentException(sprintf('The AddInfo property can only contain items of \StructType\AddInfoType, "%s" given', is_object($addInfosTypeAddInfoItem) ? get_class($addInfosTypeAddInfoItem) : gettype($addInfosTypeAddInfoItem)), __LINE__);
            }
        }
        $this->AddInfo = $addInfo;
        return $this;
    }
    /**
     * Add item to AddInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\AddInfoType $item
     * @return \StructType\AddInfosType
     */
    public function addToAddInfo(\StructType\AddInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddInfoType) {
            throw new \InvalidArgumentException(sprintf('The AddInfo property can only contain items of \StructType\AddInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AddInfosType
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
