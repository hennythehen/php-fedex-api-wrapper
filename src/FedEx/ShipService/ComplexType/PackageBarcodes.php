<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageBarcodes
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'BinaryBarcodes' => 'BinaryBarcode',
'StringBarcodes' => 'StringBarcode',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PackageBarcodes';

        
    /**
     * @var BinaryBarcode[]
     */
    public $BinaryBarcodes = array();

        
    /**
     * @var StringBarcode[]
     */
    public $StringBarcodes = array();



    /**
     * Binary-style barcodes for this package.
     *
     * @param BinaryBarcode[] $binaryBarcodes
     * @return PackageBarcodes
     */
    public function setBinaryBarcodes(array $binaryBarcodes)
    {
        $this->__set('BinaryBarcodes', $binaryBarcodes);
        $this->BinaryBarcodes = $binaryBarcodes;
        return $this;
    }
    
    /**
     * Returns Binary-style barcodes for this package.
     *
     * @return BinaryBarcode[]
     */
    public function getBinaryBarcodes()
    {
        return $this->BinaryBarcodes;
    }
    
    /**
     * String-style barcodes for this package.
     *
     * @param StringBarcode[] $stringBarcodes
     * @return PackageBarcodes
     */
    public function setStringBarcodes(array $stringBarcodes)
    {
        $this->__set('StringBarcodes', $stringBarcodes);
        $this->StringBarcodes = $stringBarcodes;
        return $this;
    }
    
    /**
     * Returns String-style barcodes for this package.
     *
     * @return StringBarcode[]
     */
    public function getStringBarcodes()
    {
        return $this->StringBarcodes;
    }
    

    
}