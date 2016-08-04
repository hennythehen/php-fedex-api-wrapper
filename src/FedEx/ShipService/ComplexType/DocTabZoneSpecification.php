<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabZoneSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DocTabZoneSpecification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ZoneNumber' => 'positiveInteger',
'Header' => 'string',
'DataField' => 'string',
'LiteralValue' => 'string',
'Justification' => 'DocTabZoneJustificationType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocTabZoneSpecification';

        
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
     * @var \FedEx\ShipService\SimpleType\DocTabZoneJustificationType|string
     */
    public $Justification;



    /**
     * Zone number can be between 1 and 12.
     *
     * @param positiveInteger $zoneNumber
     * @return DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->__set('ZoneNumber', $zoneNumber);
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * Returns Zone number can be between 1 and 12.
     *
     * @return positiveInteger
     */
    public function getZoneNumber()
    {
        return $this->ZoneNumber;
    }
    
    /**
     * Header value on this zone.
     *
     * @param string $header
     * @return DocTabZoneSpecification
     */
    public function setHeader($header)
    {
        $this->__set('Header', $header);
        $this->Header = $header;
        return $this;
    }
    
    /**
     * Returns Header value on this zone.
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->Header;
    }
    
    /**
     * Reference path to the element in the request/reply whose value should be printed on this zone.
     *
     * @param string $dataField
     * @return DocTabZoneSpecification
     */
    public function setDataField($dataField)
    {
        $this->__set('DataField', $dataField);
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * Returns Reference path to the element in the request/reply whose value should be printed on this zone.
     *
     * @return string
     */
    public function getDataField()
    {
        return $this->DataField;
    }
    
    /**
     * Free form-text to be printed in this zone.
     *
     * @param string $literalValue
     * @return DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue)
    {
        $this->__set('LiteralValue', $literalValue);
        $this->LiteralValue = $literalValue;
        return $this;
    }
    
    /**
     * Returns Free form-text to be printed in this zone.
     *
     * @return string
     */
    public function getLiteralValue()
    {
        return $this->LiteralValue;
    }
    
    /**
     * Justification for the text printed on this zone.
     *
     * @param \FedEx\ShipService\SimpleType\DocTabZoneJustificationType|string $justification
     * @return DocTabZoneSpecification
     */
    public function setJustification($justification)
    {
        $this->__set('Justification', $justification);
        $this->Justification = $justification;
        return $this;
    }
    
    /**
     * Returns Justification for the text printed on this zone.
     *
     * @return \FedEx\ShipService\SimpleType\DocTabZoneJustificationType|string
     */
    public function getJustification()
    {
        return $this->Justification;
    }
    

    
}