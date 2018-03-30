<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownstreamProcessListType StructType
 * @subpackage Structs
 */
class DownstreamProcessListType extends AbstractStructBase
{
    /**
     * The Process
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \traveltainment\SOAP17\StructType\DownstreamProcessType[]
     */
    public $Process;
    /**
     * Constructor method for DownstreamProcessListType
     * @uses DownstreamProcessListType::setProcess()
     * @param \traveltainment\SOAP17\StructType\DownstreamProcessType[] $process
     */
    public function __construct(array $process = array())
    {
        $this
            ->setProcess($process);
    }
    /**
     * Get Process value
     * @return \traveltainment\SOAP17\StructType\DownstreamProcessType[]|null
     */
    public function getProcess()
    {
        return $this->Process;
    }
    /**
     * Set Process value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\DownstreamProcessType[] $process
     * @return \traveltainment\SOAP17\StructType\DownstreamProcessListType
     */
    public function setProcess(array $process = array())
    {
        foreach ($process as $downstreamProcessListTypeProcessItem) {
            // validation for constraint: itemType
            if (!$downstreamProcessListTypeProcessItem instanceof \traveltainment\SOAP17\StructType\DownstreamProcessType) {
                throw new \InvalidArgumentException(sprintf('The Process property can only contain items of \traveltainment\SOAP17\StructType\DownstreamProcessType, "%s" given', is_object($downstreamProcessListTypeProcessItem) ? get_class($downstreamProcessListTypeProcessItem) : gettype($downstreamProcessListTypeProcessItem)), __LINE__);
            }
        }
        $this->Process = $process;
        return $this;
    }
    /**
     * Add item to Process value
     * @throws \InvalidArgumentException
     * @param \traveltainment\SOAP17\StructType\DownstreamProcessType $item
     * @return \traveltainment\SOAP17\StructType\DownstreamProcessListType
     */
    public function addToProcess(\traveltainment\SOAP17\StructType\DownstreamProcessType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \traveltainment\SOAP17\StructType\DownstreamProcessType) {
            throw new \InvalidArgumentException(sprintf('The Process property can only contain items of \traveltainment\SOAP17\StructType\DownstreamProcessType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Process[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\DownstreamProcessListType
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
