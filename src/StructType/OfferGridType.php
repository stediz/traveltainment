<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferGridType StructType
 * @subpackage Structs
 */
class OfferGridType extends AbstractStructBase
{
    /**
     * The Group
     * @var \traveltainment\SOAP17\StructType\OfferGridGroupType
     */
    public $Group;
    /**
     * Constructor method for OfferGridType
     * @uses OfferGridType::setGroup()
     * @param \traveltainment\SOAP17\StructType\OfferGridGroupType $group
     */
    public function __construct(\traveltainment\SOAP17\StructType\OfferGridGroupType $group = null)
    {
        $this
            ->setGroup($group);
    }
    /**
     * Get Group value
     * @return \traveltainment\SOAP17\StructType\OfferGridGroupType|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param \traveltainment\SOAP17\StructType\OfferGridGroupType $group
     * @return \traveltainment\SOAP17\StructType\OfferGridType
     */
    public function setGroup(\traveltainment\SOAP17\StructType\OfferGridGroupType $group = null)
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
     * @return \traveltainment\SOAP17\StructType\OfferGridType
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
