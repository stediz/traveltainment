<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HolidayHomeOfferGridType StructType
 * @subpackage Structs
 */
class HolidayHomeOfferGridType extends AbstractStructBase
{
    /**
     * The Group
     * @var \StructType\HolidayHomeOfferGridGroupType
     */
    public $Group;
    /**
     * Constructor method for HolidayHomeOfferGridType
     * @uses HolidayHomeOfferGridType::setGroup()
     * @param \StructType\HolidayHomeOfferGridGroupType $group
     */
    public function __construct(\StructType\HolidayHomeOfferGridGroupType $group = null)
    {
        $this
            ->setGroup($group);
    }
    /**
     * Get Group value
     * @return \StructType\HolidayHomeOfferGridGroupType|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \StructType\HolidayHomeOfferGridGroupType $group
     * @return \StructType\HolidayHomeOfferGridType
     */
    public function setGroup(\StructType\HolidayHomeOfferGridGroupType $group = null)
    {
        $this->Group = $group;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HolidayHomeOfferGridType
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
