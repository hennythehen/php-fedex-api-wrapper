<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class StringBarcode
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'StringBarcodeType',
'Value' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'StringBarcode';

        
    /**
     * @var \FedEx\TrackService\SimpleType\StringBarcodeType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $Value;



    /**
     * The kind of barcode data in this instance.
     *
     * @param \FedEx\TrackService\SimpleType\StringBarcodeType|string $type
     * @return StringBarcode
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns The kind of barcode data in this instance.
     *
     * @return \FedEx\TrackService\SimpleType\StringBarcodeType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * The data content of this instance.
     *
     * @param string $value
     * @return StringBarcode
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns The data content of this instance.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}