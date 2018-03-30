<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionPostsortingSelectionType StructType
 * @subpackage Structs
 */
class RegionPostsortingSelectionType extends AbstractStructBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Order;
    /**
     * The GroupByRegion
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $GroupByRegion;
    /**
     * The Postsorting
     * @var string
     */
    public $Postsorting;
    /**
     * Constructor method for RegionPostsortingSelectionType
     * @uses RegionPostsortingSelectionType::setOrder()
     * @uses RegionPostsortingSelectionType::setGroupByRegion()
     * @uses RegionPostsortingSelectionType::setPostsorting()
     * @param string $order
     * @param bool $groupByRegion
     * @param string $postsorting
     */
    public function __construct($order = null, $groupByRegion = null, $postsorting = null)
    {
        $this
            ->setOrder($order)
            ->setGroupByRegion($groupByRegion)
            ->setPostsorting($postsorting);
    }
    /**
     * Get Order value
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \traveltainment\SOAP17\EnumType\SortDirectionEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\SortDirectionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \traveltainment\SOAP17\StructType\RegionPostsortingSelectionType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\SortDirectionEnum::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \traveltainment\SOAP17\EnumType\SortDirectionEnum::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get GroupByRegion value
     * @return bool
     */
    public function getGroupByRegion()
    {
        return $this->GroupByRegion;
    }
    /**
     * Set GroupByRegion value
     * @param bool $groupByRegion
     * @return \traveltainment\SOAP17\StructType\RegionPostsortingSelectionType
     */
    public function setGroupByRegion($groupByRegion = null)
    {
        // validation for constraint: boolean
        if (!is_null($groupByRegion) && !is_bool($groupByRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($groupByRegion)), __LINE__);
        }
        $this->GroupByRegion = $groupByRegion;
        return $this;
    }
    /**
     * Get Postsorting value
     * @return string|null
     */
    public function getPostsorting()
    {
        return $this->Postsorting;
    }
    /**
     * Set Postsorting value
     * @uses \traveltainment\SOAP17\EnumType\RegionPostsortingEnum::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\RegionPostsortingEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $postsorting
     * @return \traveltainment\SOAP17\StructType\RegionPostsortingSelectionType
     */
    public function setPostsorting($postsorting = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\RegionPostsortingEnum::valueIsValid($postsorting)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $postsorting, implode(', ', \traveltainment\SOAP17\EnumType\RegionPostsortingEnum::getValidValues())), __LINE__);
        }
        $this->Postsorting = $postsorting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\RegionPostsortingSelectionType
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
