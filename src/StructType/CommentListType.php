<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentListType StructType
 * @subpackage Structs
 */
class CommentListType extends AbstractStructBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\CommentDefinitionType[]
     */
    public $Comment;
    /**
     * Constructor method for CommentListType
     * @uses CommentListType::setComment()
     * @param \traveltainment\SOAP17\StructType\CommentDefinitionType[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \traveltainment\SOAP17\StructType\CommentDefinitionType[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\CommentDefinitionType[] $comment
     * @return \traveltainment\SOAP17\StructType\CommentListType
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $commentListTypeCommentItem) {
            // validation for constraint: itemType
            if (!$commentListTypeCommentItem instanceof \traveltainment\SOAP17\StructType\CommentDefinitionType) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \traveltainment\SOAP17\StructType\CommentDefinitionType, "%s" given', is_object($commentListTypeCommentItem) ? get_class($commentListTypeCommentItem) : gettype($commentListTypeCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\CommentDefinitionType $item
     * @return \traveltainment\SOAP17\StructType\CommentListType
     */
    public function addToComment(\traveltainment\SOAP17\StructType\CommentDefinitionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\CommentDefinitionType) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \traveltainment\SOAP17\StructType\CommentDefinitionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Comment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\CommentListType
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
