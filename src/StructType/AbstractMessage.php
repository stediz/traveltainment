<?php

namespace traveltainment\SOAP17\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractMessage StructType
 * Meta informations extracted from the WSDL
 * - documentation: Die AbstractMessage ist die Basisklasse auf der alle Request und Responsetypen beruhen. Sie enthaelt lediglich die Typen die fuer rudimentaerster kommunikation verwendet werden koennen.
 * @subpackage Structs
 */
abstract class AbstractMessage extends AbstractStructBase
{
    /**
     * The Target
     * Meta informations extracted from the WSDL
     * - documentation: Das Target soll angegeben werden um die Umgebung der Anfrage zu definieren. Test laesst auf eine Testumgebung schliessen und Production soll fuer den Livebetrieb verwendet werden.
     * - use: required
     * @var string
     */
    public $Target;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - documentation: Der LanguageCode ist eine nach RFC [3066] definiert.
     * - use: required
     * @var string
     */
    public $LanguageCode;
    /**
     * The CID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CID;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: Dieser Knoten beinhaltet ein dateTime und sollte mit einem sinnvollen Wert belegt werden. Die Deutung des Inhalts liegt beim Ersteller. Die TTXml gibt hier den Zeitpunkt der Objekterstellung an.
     * - use: optional
     * @var string
     */
    public $Timestamp;
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - documentation: Dieses Feld enthaelt eine von den Traveltainmentsystemen erstellte SessionID und sollte bei vom Benutzer der TTXml immer gespiegelt werden, sofern eine SessionID vorliegt. Im Moment wird dieses Feld nur fuer den Buchungsvorgang
     * benoetigt.
     * - use: optional
     * @var string
     */
    public $SessionID;
    /**
     * The TrackingID
     * Meta informations extracted from the WSDL
     * - documentation: Die TrackingID ist aehnlich der SessionID ein Parameter um mehrere RQ/RS einem Kommunikationsworkflow zuzuordnen. Dieses Feld kann vom Benutzer frei verwendet werden und die TTXml spiegelt immer ihren Inhalt.
     * - use: optional
     * @var string
     */
    public $TrackingID;
    /**
     * The ClientSessionID
     * Meta informations extracted from the WSDL
     * - documentation: Die ClientSession ist aehnlich der SessionID ein Parameter um mehrere RQ/RS einem Kommunikationsworkflow zuzuordnen. Dieses Feld kann vom Benutzer frei verwendet werden und die TTXml spiegelt immer ihren Inhalt.
     * - use: optional
     * @var string
     */
    public $ClientSessionID;
    /**
     * Constructor method for AbstractMessage
     * @uses AbstractMessage::setTarget()
     * @uses AbstractMessage::setLanguageCode()
     * @uses AbstractMessage::setCID()
     * @uses AbstractMessage::setTimestamp()
     * @uses AbstractMessage::setSessionID()
     * @uses AbstractMessage::setTrackingID()
     * @uses AbstractMessage::setClientSessionID()
     * @param string $target
     * @param string $languageCode
     * @param string $cID
     * @param string $timestamp
     * @param string $sessionID
     * @param string $trackingID
     * @param string $clientSessionID
     */
    public function __construct($target = null, $languageCode = null, $cID = null, $timestamp = null, $sessionID = null, $trackingID = null, $clientSessionID = null)
    {
        $this
            ->setTarget($target)
            ->setLanguageCode($languageCode)
            ->setCID($cID)
            ->setTimestamp($timestamp)
            ->setSessionID($sessionID)
            ->setTrackingID($trackingID)
            ->setClientSessionID($clientSessionID);
    }
    /**
     * Get Target value
     * @return string
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @uses \traveltainment\SOAP17\EnumType\TargetType::valueIsValid()
     * @uses \traveltainment\SOAP17\EnumType\TargetType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $target
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setTarget($target = null)
    {
        // validation for constraint: enumeration
        if (!\traveltainment\SOAP17\EnumType\TargetType::valueIsValid($target)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $target, implode(', ', \traveltainment\SOAP17\EnumType\TargetType::getValidValues())), __LINE__);
        }
        $this->Target = $target;
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Get CID value
     * @return string|null
     */
    public function getCID()
    {
        return $this->CID;
    }
    /**
     * Set CID value
     * @param string $cID
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setCID($cID = null)
    {
        // validation for constraint: string
        if (!is_null($cID) && !is_string($cID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cID)), __LINE__);
        }
        $this->CID = $cID;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Get TrackingID value
     * @return string|null
     */
    public function getTrackingID()
    {
        return $this->TrackingID;
    }
    /**
     * Set TrackingID value
     * @param string $trackingID
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setTrackingID($trackingID = null)
    {
        // validation for constraint: string
        if (!is_null($trackingID) && !is_string($trackingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingID)), __LINE__);
        }
        $this->TrackingID = $trackingID;
        return $this;
    }
    /**
     * Get ClientSessionID value
     * @return string|null
     */
    public function getClientSessionID()
    {
        return $this->ClientSessionID;
    }
    /**
     * Set ClientSessionID value
     * @param string $clientSessionID
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
     */
    public function setClientSessionID($clientSessionID = null)
    {
        // validation for constraint: string
        if (!is_null($clientSessionID) && !is_string($clientSessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientSessionID)), __LINE__);
        }
        $this->ClientSessionID = $clientSessionID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \traveltainment\SOAP17\StructType\AbstractMessage
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
