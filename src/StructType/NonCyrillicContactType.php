<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonCyrillicContactType StructType
 * Meta informations extracted from the WSDL
 * - pattern: \P{IsCyrillic}*
 * @subpackage Structs
 */
class NonCyrillicContactType extends AbstractStructBase
{
    /**
     * The _
     * @var \StructType\NonCyrillicContactType
     */
    public $_;
    /**
     * Constructor method for NonCyrillicContactType
     * @uses NonCyrillicContactType::set_()
     * @param \StructType\NonCyrillicContactType $_
     */
    public function __construct(\StructType\NonCyrillicContactType $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return \StructType\NonCyrillicContactType|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param \StructType\NonCyrillicContactType $_
     * @return \StructType\NonCyrillicContactType
     */
    public function set_(\StructType\NonCyrillicContactType $_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\NonCyrillicContactType
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
