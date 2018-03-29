<?php

namespace StructType;

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
     * @var \StructType\CommentDefinitionType[]
     */
    public $Comment;
    /**
     * Constructor method for CommentListType
     * @uses CommentListType::setComment()
     * @param \StructType\CommentDefinitionType[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \StructType\CommentDefinitionType[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param \StructType\CommentDefinitionType[] $comment
     * @return \StructType\CommentListType
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $commentListTypeCommentItem) {
            // validation for constraint: itemType
            if (!$commentListTypeCommentItem instanceof \StructType\CommentDefinitionType) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \StructType\CommentDefinitionType, "%s" given', is_object($commentListTypeCommentItem) ? get_class($commentListTypeCommentItem) : gettype($commentListTypeCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param \StructType\CommentDefinitionType $item
     * @return \StructType\CommentListType
     */
    public function addToComment(\StructType\CommentDefinitionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CommentDefinitionType) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \StructType\CommentDefinitionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \StructType\CommentListType
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
