<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonFetchRS StructType
 * @subpackage Structs
 */
class AddonFetchRS extends XmlInterfaceRS
{
    /**
     * The AddonInfos
     * @var \StructType\AddonFetchType
     */
    public $AddonInfos;
    /**
     * The CommentList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CommentListType
     */
    public $CommentList;
    /**
     * The ParamList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExtendedKeyValueListType
     */
    public $ParamList;
    /**
     * Constructor method for AddonFetchRS
     * @uses AddonFetchRS::setAddonInfos()
     * @uses AddonFetchRS::setCommentList()
     * @uses AddonFetchRS::setParamList()
     * @param \StructType\AddonFetchType $addonInfos
     * @param \StructType\CommentListType $commentList
     * @param \StructType\ExtendedKeyValueListType $paramList
     */
    public function __construct(\StructType\AddonFetchType $addonInfos = null, \StructType\CommentListType $commentList = null, \StructType\ExtendedKeyValueListType $paramList = null)
    {
        $this
            ->setAddonInfos($addonInfos)
            ->setCommentList($commentList)
            ->setParamList($paramList);
    }
    /**
     * Get AddonInfos value
     * @return \StructType\AddonFetchType|null
     */
    public function getAddonInfos()
    {
        return $this->AddonInfos;
    }
    /**
     * Set AddonInfos value
     * @param \StructType\AddonFetchType $addonInfos
     * @return \StructType\AddonFetchRS
     */
    public function setAddonInfos(\StructType\AddonFetchType $addonInfos = null)
    {
        $this->AddonInfos = $addonInfos;
        return $this;
    }
    /**
     * Get CommentList value
     * @return \StructType\CommentListType|null
     */
    public function getCommentList()
    {
        return $this->CommentList;
    }
    /**
     * Set CommentList value
     * @param \StructType\CommentListType $commentList
     * @return \StructType\AddonFetchRS
     */
    public function setCommentList(\StructType\CommentListType $commentList = null)
    {
        $this->CommentList = $commentList;
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
     * @return \StructType\AddonFetchRS
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
     * @return \StructType\AddonFetchRS
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
