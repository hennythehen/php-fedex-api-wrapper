<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class BinaryBarcode
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'BinaryBarcodeType',
'Value' => 'base64Binary',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'BinaryBarcode';

        
    /**
     * @var \FedEx\ShipService\SimpleType\BinaryBarcodeType|string
     */
    public $Type;

        
    /**
     * @var base64Binary
     */
    public $Value;



    /**
     * The kind of barcode data in this instance.
     *
     * @param \FedEx\ShipService\SimpleType\BinaryBarcodeType|string $type
     * @return BinaryBarcode
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
     * @return \FedEx\ShipService\SimpleType\BinaryBarcodeType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * The data content of this instance.
     *
     * @param base64Binary $value
     * @return BinaryBarcode
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
     * @return base64Binary
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}