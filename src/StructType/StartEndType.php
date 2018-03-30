<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartEndType StructType
 * @subpackage Structs
 */
class StartEndType extends AbstractStructBase
{
    /**
     * The Start
     * @var \traveltainment\SOAP17\StructType\DateTimeType
     */
    public $Start;
    /**
     * The End
     * @var \traveltainment\SOAP17\StructType\DateTimeType
     */
    public $End;
    /**
     * Constructor method for StartEndType
     * @uses StartEndType::setStart()
     * @uses StartEndType::setEnd()
     * @param \traveltainment\SOAP17\StructType\DateTimeType $start
     * @param \traveltainment\SOAP17\StructType\DateTimeType $end
     */
    public function __construct(\traveltainment\SOAP17\StructType\DateTimeType $start = null, \traveltainment\SOAP17\StructType\DateTimeType $end = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get Start value
     * @return \traveltainment\SOAP17\StructType\DateTimeType|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param \traveltainment\SOAP17\StructType\DateTimeType $start
     * @return \traveltainment\SOAP17\StructType\StartEndType
     */
    public function setStart(\traveltainment\SOAP17\StructType\DateTimeType $start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return \traveltainment\SOAP17\StructType\DateTimeType|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param \traveltainment\SOAP17\StructType\DateTimeType $end
     * @return \traveltainment\SOAP17\StructType\StartEndType
     */
    public function setEnd(\traveltainment\SOAP17\StructType\DateTimeType $end = null)
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
     * @return \traveltainment\SOAP17\StructType\StartEndType
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
