<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartEndType StructType
 * @subpackage Structs
 */
class StartEndType extends AbstractStructBase
{
    /**
     * The Start
     * @var \StructType\DateTimeType
     */
    public $Start;
    /**
     * The End
     * @var \StructType\DateTimeType
     */
    public $End;
    /**
     * Constructor method for StartEndType
     * @uses StartEndType::setStart()
     * @uses StartEndType::setEnd()
     * @param \StructType\DateTimeType $start
     * @param \StructType\DateTimeType $end
     */
    public function __construct(\StructType\DateTimeType $start = null, \StructType\DateTimeType $end = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get Start value
     * @return \StructType\DateTimeType|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param \StructType\DateTimeType $start
     * @return \StructType\StartEndType
     */
    public function setStart(\StructType\DateTimeType $start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return \StructType\DateTimeType|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param \StructType\DateTimeType $end
     * @return \StructType\StartEndType
     */
    public function setEnd(\StructType\DateTimeType $end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StartEndType
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
