<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ConfigurableLabelReferenceEntry
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ZoneNumber' => 'positiveInteger',
'Header' => 'string',
'DataField' => 'string',
'LiteralValue' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ConfigurableLabelReferenceEntry';

        
    /**
     * @var positiveInteger
     */
    public $ZoneNumber;

        
    /**
     * @var string
     */
    public $Header;

        
    /**
     * @var string
     */
    public $DataField;

        
    /**
     * @var string
     */
    public $LiteralValue;



    /**
     * 1 of 12 possible zones to position data.
     *
     * @param positiveInteger $zoneNumber
     * @return ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->__set('ZoneNumber', $zoneNumber);
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * Returns 1 of 12 possible zones to position data.
     *
     * @return positiveInteger
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    
    /**
     * The identifiying text for the data in this zone.
     *
     * @param string $header
     * @return ConfigurableLabelReferenceEntry
     */
    public function setHeader($header)
    {
        $this->__set('Header', $header);
        $this->Header = $header;
        return $this;
    }
    
    /**
     * Returns The identifiying text for the data in this zone.
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }
    
    /**
     * A reference to a field in either the request or reply to print in this zone following the header.
     *
     * @param string $dataField
     * @return ConfigurableLabelReferenceEntry
     */
    public function setDataField($dataField)
    {
        $this->__set('DataField', $dataField);
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * Returns A reference to a field in either the request or reply to print in this zone following the header.
     *
     * @return string
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    
    /**
     * A literal value to print after the header in this zone.
     *
     * @param string $literalValue
     * @return ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($literalValue)
    {
        $this->__set('LiteralValue', $literalValue);
        $this->LiteralValue = $literalValue;
        return $this;
    }
    
    /**
     * Returns A literal value to print after the header in this zone.
     *
     * @return string
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    

    
}