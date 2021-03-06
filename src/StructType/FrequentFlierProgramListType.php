<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentFlierProgramListType StructType
 * @subpackage Structs
 */
class FrequentFlierProgramListType extends AbstractStructBase
{
    /**
     * The Program
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProgramType[]
     */
    public $Program;
    /**
     * Constructor method for FrequentFlierProgramListType
     * @uses FrequentFlierProgramListType::setProgram()
     * @param \StructType\ProgramType[] $program
     */
    public function __construct(array $program = array())
    {
        $this
            ->setProgram($program);
    }
    /**
     * Get Program value
     * @return \StructType\ProgramType[]|null
     */
    public function getProgram()
    {
        return $this->Program;
    }
    /**
     * Set Program value
     * @throws \InvalidArgumentException
     * @param \StructType\ProgramType[] $program
     * @return \StructType\FrequentFlierProgramListType
     */
    public function setProgram(array $program = array())
    {
        foreach ($program as $frequentFlierProgramListTypeProgramItem) {
            // validation for constraint: itemType
            if (!$frequentFlierProgramListTypeProgramItem instanceof \StructType\ProgramType) {
                throw new \InvalidArgumentException(sprintf('The Program property can only contain items of \StructType\ProgramType, "%s" given', is_object($frequentFlierProgramListTypeProgramItem) ? get_class($frequentFlierProgramListTypeProgramItem) : gettype($frequentFlierProgramListTypeProgramItem)), __LINE__);
            }
        }
        $this->Program = $program;
        return $this;
    }
    /**
     * Add item to Program value
     * @throws \InvalidArgumentException
     * @param \StructType\ProgramType $item
     * @return \StructType\FrequentFlierProgramListType
     */
    public function addToProgram(\StructType\ProgramType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProgramType) {
            throw new \InvalidArgumentException(sprintf('The Program property can only contain items of \StructType\ProgramType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Program[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FrequentFlierProgramListType
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
