<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentList StructType
 * @subpackage Structs
 */
class CommentList extends AbstractStructBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Comment;
    /**
     * Constructor method for CommentList
     * @uses CommentList::setComment()
     * @param string[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return string[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @uses \traveltainment\SOAP17\EnumType\CommentType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CommentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $comment
     * @return \traveltainment\SOAP17\StructType\CommentList
     */
    public function setComment(array $comment = array())
    {
        $invalidValues = array();
        foreach ($comment as $commentListCommentItem) {
            if (!\traveltainment\SOAP17\EnumType\CommentType::valueIsValid($commentListCommentItem)) {
                $invalidValues[] = var_export($commentListCommentItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\CommentType::getValidValues())), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @uses \traveltainment\SOAP17\EnumType\CommentType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\CommentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\CommentList
     */
    public function addToComment($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\CommentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\CommentType::getValidValues())), __LINE__);
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
     * @return \traveltainment\SOAP17\StructType\CommentList
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
