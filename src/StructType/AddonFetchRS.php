<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonFetchRS StructType
 * @subpackage Structs
 */
class AddonFetchRS extends XmlInterfaceRS
{
    /**
     * The AddonInfos
     * @var \traveltainment\SOAP17\StructType\AddonFetchType
     */
    public $AddonInfos;
    /**
     * The CommentList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\CommentListType
     */
    public $CommentList;
    /**
     * The ParamList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \traveltainment\SOAP17\StructType\ExtendedKeyValueListType
     */
    public $ParamList;
    /**
     * Constructor method for AddonFetchRS
     * @uses AddonFetchRS::setAddonInfos()
     * @uses AddonFetchRS::setCommentList()
     * @uses AddonFetchRS::setParamList()
     * @param \traveltainment\SOAP17\StructType\AddonFetchType $addonInfos
     * @param \traveltainment\SOAP17\StructType\CommentListType $commentList
     * @param \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList
     */
    public function __construct(\traveltainment\SOAP17\StructType\AddonFetchType $addonInfos = null, \traveltainment\SOAP17\StructType\CommentListType $commentList = null, \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList = null)
    {
        $this
            ->setAddonInfos($addonInfos)
            ->setCommentList($commentList)
            ->setParamList($paramList);
    }
    /**
     * Get AddonInfos value
     * @return \traveltainment\SOAP17\StructType\AddonFetchType|null
     */
    public function getAddonInfos()
    {
        return $this->AddonInfos;
    }
    /**
     * Set AddonInfos value
     * @param \traveltainment\SOAP17\StructType\AddonFetchType $addonInfos
     * @return \traveltainment\SOAP17\StructType\AddonFetchRS
     */
    public function setAddonInfos(\traveltainment\SOAP17\StructType\AddonFetchType $addonInfos = null)
    {
        $this->AddonInfos = $addonInfos;
        return $this;
    }
    /**
     * Get CommentList value
     * @return \traveltainment\SOAP17\StructType\CommentListType|null
     */
    public function getCommentList()
    {
        return $this->CommentList;
    }
    /**
     * Set CommentList value
     * @param \traveltainment\SOAP17\StructType\CommentListType $commentList
     * @return \traveltainment\SOAP17\StructType\AddonFetchRS
     */
    public function setCommentList(\traveltainment\SOAP17\StructType\CommentListType $commentList = null)
    {
        $this->CommentList = $commentList;
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
     * @return \traveltainment\SOAP17\StructType\AddonFetchRS
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
     * @return \traveltainment\SOAP17\StructType\AddonFetchRS
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
