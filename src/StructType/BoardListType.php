<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoardListType StructType
 * @subpackage Structs
 */
class BoardListType extends AbstractStructBase
{
    /**
     * The Board
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Board;
    /**
     * Constructor method for BoardListType
     * @uses BoardListType::setBoard()
     * @param string[] $board
     */
    public function __construct(array $board = array())
    {
        $this
            ->setBoard($board);
    }
    /**
     * Get Board value
     * @return string[]|null
     */
    public function getBoard()
    {
        return $this->Board;
    }
    /**
     * Set Board value
     * @uses \traveltainment\SOAP17\EnumType\Meal::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Meal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $board
     * @return \traveltainment\SOAP17\StructType\BoardListType
     */
    public function setBoard(array $board = array())
    {
        $invalidValues = array();
        foreach ($board as $boardListTypeBoardItem) {
            if (!\traveltainment\SOAP17\EnumType\Meal::valueIsValid($boardListTypeBoardItem)) {
                $invalidValues[] = var_export($boardListTypeBoardItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \traveltainment\SOAP17\EnumType\Meal::getValidValues())), __LINE__);
        }
        $this->Board = $board;
        return $this;
    }
    /**
     * Add item to Board value
     * @uses \traveltainment\SOAP17\EnumType\Meal::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\Meal::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \traveltainment\SOAP17\StructType\BoardListType
     */
    public function addToBoard($item)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\Meal::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \traveltainment\SOAP17\EnumType\Meal::getValidValues())), __LINE__);
        }
        $this->Board[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\BoardListType
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
