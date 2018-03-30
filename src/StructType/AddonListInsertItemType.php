<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddonListInsertItemType StructType
 * @subpackage Structs
 */
class AddonListInsertItemType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The AddonInfos
     * @var \traveltainment\SOAP17\StructType\AddonInsertType
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
     * Constructor method for AddonListInsertItemType
     * @uses AddonListInsertItemType::setId()
     * @uses AddonListInsertItemType::setAddonInfos()
     * @uses AddonListInsertItemType::setCommentList()
     * @uses AddonListInsertItemType::setParamList()
     * @param string $id
     * @param \traveltainment\SOAP17\StructType\AddonInsertType $addonInfos
     * @param \traveltainment\SOAP17\StructType\CommentListType $commentList
     * @param \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList
     */
    public function __construct($id = null, \traveltainment\SOAP17\StructType\AddonInsertType $addonInfos = null, \traveltainment\SOAP17\StructType\CommentListType $commentList = null, \traveltainment\SOAP17\StructType\ExtendedKeyValueListType $paramList = null)
    {
        $this
            ->setId($id)
            ->setAddonInfos($addonInfos)
            ->setCommentList($commentList)
            ->setParamList($paramList);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \traveltainment\SOAP17\StructType\AddonListInsertItemType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get AddonInfos value
     * @return \traveltainment\SOAP17\StructType\AddonInsertType|null
     */
    public function getAddonInfos()
    {
        return $this->AddonInfos;
    }
    /**
     * Set AddonInfos value
     * @param \traveltainment\SOAP17\StructType\AddonInsertType $addonInfos
     * @return \traveltainment\SOAP17\StructType\AddonListInsertItemType
     */
    public function setAddonInfos(\traveltainment\SOAP17\StructType\AddonInsertType $addonInfos = null)
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
     * @return \traveltainment\SOAP17\StructType\AddonListInsertItemType
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
     * @return \traveltainment\SOAP17\StructType\AddonListInsertItemType
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
     * @return \traveltainment\SOAP17\StructType\AddonListInsertItemType
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
